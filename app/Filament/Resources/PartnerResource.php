<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Contact;
use App\Models\Partner;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Actions\StaticAction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Group;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Components\Section;
use Barryvdh\Debugbar\Facades\Debugbar;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Filament\Support\View\Components\Modal;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\Collection;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use App\Filament\Resources\PartnersResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Webbingbrasil\FilamentCopyActions\Tables\Actions\CopyAction;
use Webbingbrasil\FilamentCopyActions\Tables\CopyableTextColumn;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;
    protected static ?string $navigationLabel = 'Εταίροι';

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    private static function countryOptions() {
        $countries = DB::table('countries')->get();

        return $countries->mapWithKeys(function ($country) {
            $flagExists = $country->flag !== "";
            return [$country->id => $country->flag . ($flagExists ? ' ' : '') . $country->name]; // Combine flag and country name
        });
    }

    

    private static function contactLabel(array $state): ?string {

        $occupationDescription = "";
        $hyphen = ($state['firstname'] || $state['lastname']) ? " - " : "";

        if($state['occupation'] === "Other") {
            if(!empty($state['occupation_description'])) {
                $occupationDescription = $hyphen . $state['occupation_description'];
            } 
        } else if($state['occupation']) {
            $occupationDescription = $hyphen . Contact::OCCUPATIONS[$state['occupation']];
        }

        return trim(($state['firstname'] ?? '') . ' ' . ($state['lastname'] ?? '') . ' ' . $occupationDescription);
    }

    
    private static function changeWebsiteSuffixIconColor($state, $operation) {
        if($operation === "edit") {
            if(empty($state)) {
                return 'muted';
            } else if(filter_var($state, FILTER_VALIDATE_URL) && !empty($state)) {
                return 'success';
            } else {
                return 'danger';
            }
        } 
    }

    private static function occupationFields() {

        $occupationUnspecified = fn (Get $get): bool => $get('occupation') === "Other";

        $occupationField = Select::make('occupation')
                            ->label("Θέση Εργασίας")
                            ->options(Contact::OCCUPATIONS)
                            ->searchable() 
                            ->placeholder('Επέλεξε θέση')
                            ->live()
                            ->columnSpan(2);
                            

       $initialOccupation = (clone $occupationField)->hidden($occupationUnspecified);

       $descriptiveOccupation = Section::make('')
                                ->schema([
                                    $occupationField,
                                
                                    TextInput::make('occupation_description')
                                    ->label('')
                                    ->placeholder('Περιέγραψε τη θέση')
                                    ->live()
                                    ->columnSpan(2)->autofocus($occupationUnspecified),
                                ])->visible($occupationUnspecified);
        
        // Make sure to spread the function call, filament form does not expect form fields inside arrays
        // Spread operator: ...array / ...fn() / ...self::occupationFields()
        return [$initialOccupation, $descriptiveOccupation];   
    }

    private static function generalDetails() {
        return Section::make('Γενικές Πληροφορίες')
                ->icon("heroicon-o-information-circle")
                ->iconColor('black')
                ->iconSize('md')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('name')->label('Όνομα Εταίρου')->columnSpan("full")->required(),
                            TextInput::make('email')->email()->label('Email')->required(),
                            TextInput::make('tel')->label('Τηλέφωνο Επικοινωνίας')->tel()->required(),
                            TextInput::make('website')->url()->nullable()->label('Website')->columnSpan("full")->suffixIcon('heroicon-o-globe-alt')
                            ->suffixIconColor(fn ($state, $operation) => self::changeWebsiteSuffixIconColor($state, $operation))
                            ->reactive(),
                        ]),
                    ])
                ->collapsible();
    }

    private static function addressDetails() {
        return Section::make("Στοιχεία Διεύθυνσης")
                ->icon("heroicon-o-home")
                ->iconColor('black')
                ->iconSize('md')
                ->collapsible()
                ->schema([
                    Grid::make(2)
                    ->schema([
                        TextInput::make('town')->required()->label('Πόλη'),
                        Select::make('country')
                            ->extraAttributes([
                                'id' => 'country-select', // Set custom ID
                                'class' => 'custom-select-class', // Set custom class
                            ])
                            ->options(fn () => self::countryOptions())
                            ->searchable()
                            ->required()
                            ->native(false)
                            ->default(69)
                            ->label('Χώρα'),

                        Grid::make(4)
                        ->schema([
                            TextInput::make('address_name')
                            ->label('Οδός')
                            ->columnSpan(['md' => 2, 'sm' => 3]),

                            TextInput::make('address_number')
                                ->label('Αριθμός')
                                ->columnSpan(['md' => 1, 'sm' => 1]),

                            TextInput::make('postal_code')
                                ->label('Ταχ. Κωδικός')
                                ->maxLength(8)
                                ->regex('/^(?:[A-Z]{1,2}\d[A-Z\d]? ?\d[A-Z]{2}|\d{4} ?\d{2}|\d{5}|\d{4})$/') // Postal code regex
                                ->nullable()
                                ->columnSpan(['md' => 1, 'sm' => 4]),
                        ]),
                    ])
                ]);
        }

    private static function contacts($placeholder = false) {

        return Section::make('Επαφές')
        ->icon("heroicon-o-user-plus")
        ->iconColor('black')
        ->collapsible()
        ->schema([
            Placeholder::make('')
            ->label(null)
            ->content(new HtmlString('<p class="fi-section-header-description overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400">Εδώ μπορείτε να προσθέσετε επιπλέον επαφές με αληθινά πρόσωπα της εταιρίας</p>'))
            ->columnSpanFull()
            ->hidden(!$placeholder),
            Repeater::make('contacts')
                ->relationship('contacts')
                ->label("")
                ->collapsible()
                ->collapsed()
                ->columns(2)
                ->itemLabel(fn ($state) => self::contactLabel($state))
                ->addActionLabel('Προσθήκη Επαφής')
                ->orderColumn()
                ->schema([
                    TextInput::make('firstname')
                        ->label('Όνομα')
                        ->live(onBlur: true)
                        ->required(),
                        

                    TextInput::make('lastname') 
                        ->label('Επίθετο')
                        ->live(onBlur: true)
                        ->required(),

                    TextInput::make('email')
                        ->label('Email') 
                        ->email()
                        ->required(),

                    TextInput::make('tel')
                        ->label('Τηλέφωνο Επικοινωνίας')
                        ->tel()
                        ->required(),

                    ...self::occupationFields()
                ])
            ]);
    }

    public static function form(Form $form): Form
    {
        
        return $form
                ->schema([
                    Group::make()->schema([
                        
                        Section::make("Στοιχεία Εταίρου")
                        ->description("Τα πεδία με αστερίσκο (*) είναι υποχρεωτικά.")
                        ->schema([
                                self::generalDetails(),
                                self::addressDetails()
                            ]),
                    ]),

                    Group::make()->schema([
                        self::contacts(true),
                        Section::make('Συνημμένα & Λογότυπο')
                            ->description("Προαιρετικά Πεδία")
                            ->icon("heroicon-o-link")
                            ->iconColor('black')
                            ->iconSize('md')->schema([
                            FileUpload::make('logo')
                            ->disk('public')
                            ->directory('logos')
                            ->downloadable()
                            ->nullable()
                            ->label('Logo')
                            ->image()
                            ->imageEditor(),

                            FileUpload::make('attachments')
                                ->disk('public')
                                ->directory('attachments')
                                ->acceptedFileTypes(['application/pdf'])
                                ->downloadable()
                                ->preserveFilenames()
                                ->panelLayout('flex')
                                ->openable()
                                ->reorderable()
                                ->previewable()
                                ->uploadingMessage('Uploading attachment...')
                                ->nullable()
                                ->label('Attachments'),

                        ])
                    ]),

                ]);

                
    }

   

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Όνομα Εταίρου')
                ->sortable()
                ->searchable(),
                TextColumn::make('email')
                ->searchable(),
                TextColumn::make('tel')
                ->label('Τηλέφωνο')
                ->sortable()
                ->searchable()
                ->badge(),
                // TextColumn::make('full_address')
                // ->label('Διεύθυνση')
                // ->sortable()
                // ->searchable()
                // ->badge()
                // ->formatStateUsing(fn ($record) => $record->full_address . ', ' . $record->town . ' ' . $record->postal_code),
                CopyableTextColumn::make('full_address')
                ->label("Διεύθυνση")
                ->searchable()
                ->sortable()
                ->toggleable()
                ->formatStateUsing(fn ($record) => $record->full_address . ', ' . $record->town . ' ' . $record->postal_code)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->visible(fn (Partner $record) => auth()->user()->isAdmin || optional($record->author)->id === auth()->user()->id),
                Action::make('view')
                ->label("View")
                ->icon('heroicon-o-eye')
                ->modalHeading('Προεπισκόπηση Εταίρου')
                ->modalDescription("Βρίσκεστε σε λειτουργία προεπισκόπησης, τα στοιχεία δεν μπορούν να τροποποιηθούν.")
                ->modalIcon('heroicon-o-eye')
                ->modalIconColor('info') 
                ->stickyModalFooter()
                ->form([
                    self::generalDetails(),
                    self::addressDetails(),
                    self::contacts()
                ])
                ->fillForm(fn (Partner $record): array => [
                    'name' => $record->name,
                    'email' => $record->email,
                    'address_name' => $record->address_name,
                    'address_number' => $record->address_number,
                    'town' => $record->town,
                    'website' => $record->website,
                    'postal_code' => $record->postal_code,
                    'tel' => $record->tel,
                    'country' => $record->country,

                ])
                ->disabledForm()
                ->modalSubmitAction(false)
                ->modalCancelAction(fn (StaticAction $action) => $action->label('Πίσω'))
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->visible(fn () => auth()->user()->isAdmin),
                    ExportBulkAction::make()->label("Export to Excel")->exports([
                        ExcelExport::make()->fromForm()->only([
                            'name', 'email', 'tel', 'full_address', 'country', 'postal_code', 'website',
                        ])->askForFilename()
                        // ExcelExport::make()->withColumns([
                        //     Column::make('contacts')
                        //     ->formatStateUsing(fn ($record) => $record->contacts->pluck('fullname')->join(','))
                        // ]),
                    ])
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
