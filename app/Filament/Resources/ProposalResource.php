<?php

namespace App\Filament\Resources;


use Carbon\Carbon;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Proposal;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\RawJs;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Actions\Action;
use App\Filament\Resources\ProposalResource\Pages;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;
use CodeWithDennis\FilamentPriceFilter\Filament\Tables\Filters\PriceFilter;
use App\Filament\Resources\ProposalResource\RelationManagers\PartnersRelationManager;


class ProposalResource extends Resource
{
    protected static ?string $model = Proposal::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Προτάσεις';

    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        TextInput::make('title')
                        ->label('Τίτλος')
                        ->required()
                        ->autofocus()
                        ->maxLength(100)->autofocus(),

                        DatePicker::make('submission_date')
                        ->label('Ημερομηνία Υποβολής')
                        ->required()
                        ->displayFormat('Y-m-d')
                        ->default(now()),

                        Select::make('coordinator_id')
                        ->label('Συντονιστής')
                        ->relationship('coordinator', 'name')
                        ->searchable()
                        ->searchDebounce(300)
                        ->preload()
                        ->required(),

                        Select::make('partners')
                        ->relationship('partners', 'name') 
                        ->label('Συνεργάτες')
                        ->searchable()
                        ->searchDebounce(300)
                        ->multiple()
                        ->hiddenOn('edit'),
                        
                        // Select::make('approval_status')
                        // ->label('Τρέχων Κατάσταση:')
                        // ->options(Proposal::APPROVAL_STATUSES)
                        // ->default('not_approved') // Set the default value here, if needed
                        // ->required(),

                        ToggleButtons::make('approval_status')
                        ->label('Τρέχων Κατάσταση:')
                        ->options(Proposal::APPROVAL_STATUSES)
                        ->icons([
                            'not_approved' => 'heroicon-o-x-mark',
                            'under_consideration' => 'heroicon-o-paper-clip',
                            'approved' => 'heroicon-o-check-circle',
                        ])
                        ->colors([
                            'approved' => 'info',
                        ])
                        ->inline()
                        ->default('not_approved') // Set the default value here, if needed
                        ->required(),

                        TextInput::make('budget')
                        ->label('Προυπολογισμός') 
                        ->mask(RawJs::make('$money($input)')) 
                        ->stripCharacters(',')
                        ->numeric()
                        ->prefix('€')
                        ->minValue(1)
                        ->maxValue(999999999.99)
                        ->live()
                        ->afterStateUpdated(function (HasForms $livewire, TextInput $component) {
                            // validateOnly looks like an error but is not
                            // probably something to do with VSCodes 'PHP Intelephense' extension
                            // ChatGPT: The IDE error does not necessarily indicate that your code will fail to execute; it is more of a discrepancy between your code and the IDE’s understanding of it
                            $livewire->validateOnly($component->getStatePath());
                        })->required(),
                        
                    ])
                ]),
                
                Group::make()->schema([
                    Section::make()->schema([
                        Textarea::make('description')
                        ->label('Περιγραφή')
                        ->maxLength(400)
                        ->autosize()
                        ->extraAttributes([
                            'x-data' => '{ charCount: 0 }',
                            'x-ref' => 'description',
                            'x-init' => 'if ($refs.description) { setTimeout(() => {
                                charCount = $refs.description?.querySelector("textarea").value?.length; document.getElementById("charCount").textContent = charCount;
                            }, 1) }',
                            'x-on:input' => 'if ($refs.description) { charCount = $refs.description?.querySelector("textarea").value?.length; document.getElementById("charCount").textContent = charCount; }',
                        ])
                        ->hint(fn() => new HtmlString('<span id="charCount">0</span> / 400 χαρακτήρες')),

                        Select::make('categories')
                        ->relationship('categories', 'name')
                        ->label('Call')
                        ->placeholder('Διάλεξε Call')
                        ->searchable()
                        ->searchDebounce(300)
                        ->preload(10),
                        
                        FileUpload::make('attachments')
                        ->label('Ανέβαστε Αρχεία')
                        ->hint('PDF (.pdf) ή Word (.doc | .docx | .dot | .dotx | .odt | .rtf)')
                        ->multiple() // Allow multiple file uploads
                        ->nullable() // Field can be empty
                        ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                        ->maxSize(3000)
                        ->multiple()
                        ->panelLayout('grid')
                        ->downloadable()
                        ->preserveFilenames(),
                    ])
                ])
            ]);
    }


    

    public static function table(Table $table): Table
    {
        
        return $table
        ->columns([
            // Title Column
            TextColumn::make('title')
                ->label('Όνομα')
                ->sortable()
                ->searchable(),

           TextColumn::make('submission_date')
           ->label("Ημ. Υποβολής")
           ->formatStateUsing(fn ($record) => Carbon::parse($record->submission_date)->translatedFormat('D, d/m/Y'))
           ->sortable(),

           TextColumn::make('partners')
                ->label('Συνεργάτες')
                ->formatStateUsing(function ($record) {
                    return $record->partners->count(); 
                })
                ->tooltip(function ($record) {
                    
                    $partnerNames = $record->partners->pluck('name')->take(3)->implode(', ');
            
                    
                    if ($record->partners->count() > 3) {
                        $partnerNames .= ', ...';
                    }
            
                    return $partnerNames ?: 'Δεν υπάρχουν συνεργάτες';
                })
                ->alignCenter(),

            // IconColumn::make('approved')
            //     ->icon(fn (bool $state): string => $state ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
            //     ->color(fn (bool $state): string => $state ? 'success' : 'danger')
            //     ->tooltip(fn (bool $state) => $state ? 'Approved' : 'Not Approved'),
            IconColumn::make('approval_status')
            ->label('Κατάσταση')
            ->icons([
                'heroicon-o-x-mark' => 'not_approved',
                'heroicon-o-paper-clip' => 'under_consideration',
                'heroicon-o-check' => 'approved',
            ])
            ->colors([
                '' => 'not_approved',
                'info' => 'under_consideration',
                'success' => 'approved',
            ])
            ->tooltip(fn ($state) => match ($state) {
                'not_approved' => '🚫 Μη εγκεκριμένο',
                'under_consideration' => '⏳ Υπό Εξέταση',
                'approved' => '✔️ Εγκεκριμένο',
            })
            ->alignCenter()
            ->sortable(),
    
            // ToggleColumn::make('approved')->label('Approved'),
            
            // TextColumn::make('description')
            //     ->label('Description'),
    
            
            TextColumn::make('coordinator.name')
                ->label('Διαχειριστής')
                ->badge()
                ->color("info"),

           
            
        ])
        ->filters([
            SelectFilter::make('categories')
                ->relationship('categories', 'name')
                ->multiple()
                ->label("Επιλογή CALL")
                ->searchable()
                ->preload(10),
            PriceFilter::make('budget')->label("Προυπολογισμός")->slider()->currency(currency: 'EUR')
            ->min(1000)
            ->max(fn () => Cache::flexible('max_budget', [30, 60], function () {
                return Proposal::max('budget') ?? 0;
            })),
            // SelectFilter::make('submission_date')
            //     ->label('Ημερομηνία Υποβολής')
            //     ->options([
            //         'upcoming' => 'Προσεχώς (Προθεσμία Σήμερα ή Αργότερα)',
            //         'today' => 'Σήμερα',
            //         'past_due' => 'Προθεσμίες που έχουν λήξει',
            //     ])
            //     ->query(function (Builder $query, $state) {
            //         $value = $state['value'];
            //         if ($value === 'upcoming') {
            //             // Filter for submissions due today or in the future
            //             return $query->where('submission_date', '>=', Carbon::today());
            //         } elseif ($value === 'past_due') {
            //             // Filter for submissions that are past due
            //             return $query->where('submission_date', '<', Carbon::today());
            //         } elseif ($value === 'today') {
            //             return $query->whereDate('submission_date', Carbon::today());
            //         } else return $query;    
            // }),
            DateRangeFilter::make('submission_date')->label("Ημερομηνία Υποβολής")->useRangeLabels(),
            // Filter::make('approved')
            //     ->query(fn (Builder $query): Builder => $query->where('approved', true)),
            SelectFilter::make('approval_status')
            ->label('Κατάσταση')
            ->options(Proposal::APPROVAL_STATUSES),
    
            
        ])
        // ->filtersFormSchema(fn (array $filters): array => [
        //     Section::make()
        //         ->schema([
        //             $filters['categories'],
        //             $filters['submission_date'],
        //             $filters['approved'],
        //     ])->columns(3),
        //     Section::make()
        //         ->schema([
        //             $filters['coordinator'],
        //             $filters['coordinatorable'],
        //     ])->columns(4)
        // ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->visible(fn () => auth()->user()->isAdmin),
                ]),
            ]);
    }

    // public function apply(Request $request): Builder
    // {
    //     $query = parent::apply($request);

    //     $categoryId = $request->get('category');
    //     if ($categoryId) {
    //         $query->whereHas('category_proposals', function ($query) use ($categoryId) {
    //             $query->where('category_id', $categoryId);
    //         });
    //     }

    //     return $query;
    // }

    public static function getRelations(): array
    {
        return [
            PartnersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProposals::route('/'),
            'create' => Pages\CreateProposal::route('/create'),
            'edit' => Pages\EditProposal::route('/{record}/edit'),
        ];
    }
}
