<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\Post;
use App\Models\User;
use Filament\Tables;
use App\Models\Partner;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\RawJs;
use Illuminate\Support\Str;
use Filament\Support\Markdown;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use PHPUnit\Framework\Constraint\IsEmpty;
use Filament\Forms\Components\ColorPicker;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Forms\Components\MorphToSelect;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Malzariey\FilamentDaterangepickerFilter\Enums\DropDirection;
use Malzariey\FilamentDaterangepickerFilter\Fields\DateRangePicker;
use CodeWithDennis\FilamentPriceFilter\Filament\Tables\Filters\PriceFilter;
use App\Filament\Resources\PostResource\RelationManagers\PartnersRelationManager;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationLabel = 'Έργα';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $modelLabel = 'Project';

    private static function getIconState(string $state, array $iconArray): string
    {
        return $iconArray[$state] ?? 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Βασικές Πληροφορίες')
                ->description("Διαχείρηση Έργου")
                ->schema([
                    TextInput::make('title')->rules('min:5')->required()->afterStateUpdated(function(string $operation, Set $set, ?string $state) {
                        if($operation === "create") {
                            $set('slug', Str::slug($state));
                        }
                    })->live(onBlur: true),
                    TextInput::make('code')->label("Κωδικός Έργου"),  
                    Select::make('category_id')->label('Category')
                    ->relationship('category','name')->searchable()->nullable()->dehydrateStateUsing(fn($state) => $state ?? 0)->preload(10), // essentially choose 'uncategorized' if you dont select a category yourself,
                    // TextInput::make('description')->rules(['min:5','max:100'])->columnSpanFull()->required(),
                    DateRangePicker::make('duration')
                    ->label("Διάρκεια (Από - Έως)")
                    ->alwaysShowCalendar()
                    ->useRangeLabels()
                    ->autoApply()
                    ->drops(DropDirection::AUTO),
                    Textarea::make('description')
                        ->label('Περιγραφή')
                        ->maxLength(100)
                        ->extraAttributes([
                            'x-data' => '{ charCount: 0 }',
                            'x-ref' => 'description',
                            'x-init' => 'if ($refs.description) { setTimeout(() => {
                                charCount = $refs.description?.querySelector("textarea").value?.length; document.getElementById("charCount").textContent = charCount;
                            }, 1) }',
                            'x-on:input' => 'if ($refs.description) { charCount = $refs.description?.querySelector("textarea").value?.length; document.getElementById("charCount").textContent = charCount; }',
                        ])
                        ->hint(fn() => new HtmlString('<span id="charCount">0</span> / 100 χαρακτήρες'))->columnSpanFull(),         
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
                        }), 
                    
                            
                        RichEditor::make('content')->ColumnSpanFull()
                ])->collapsible()
                ->columnSpan(2)->columns(2),
                
                Group::make()->schema([
                    Section::make('Meta')
                    ->description('')
                    ->schema([
                        ColorPicker::make('color')->default('#ffffff'),
                        TextInput::make('slug')->rules('max:15')->unique(ignoreRecord: true),
                        TagsInput::make('tags')->suggestions([
                            'tag-me',
                            'kwstas_tag',
                            'very tag n taggy',
                            'livewire',
                            'these auto suggested tags are TagsInput property'
                        ])
                    ])->collapsible()->columnSpan(1),
                    // Section::make('Project Members')
                    // ->description('Select members for this project')
                    // ->schema([
                    //     Select::make('Project Members')
                    //     ->relationship('users','name')
                    //     ->searchable()
                    //     ->multiple()->label('Select from list')
                    // ])

                    // FileUpload::make('thumbnail')->disk('public')->directory('thumbnails')->downloadable(),
                    Section::make('Media')
                    ->schema([
                        FileUpload::make('thumbnail')
                        ->label('Upload Project Thumbnail')
                        ->directory('thumbs')
                        ->hint('Image formats (e.g., JPG, PNG, GIF)')
                        ->nullable()
                        ->maxSize(2048)
                        ->acceptedFileTypes(['image/png','image/jpeg'])
                        ->imageEditor(),
                        
                        FileUpload::make('attachments')
                        ->disk('public')
                        ->directory('attach')
                        ->acceptedFileTypes(['application/*'])
                        ->multiple()
                        //->downloadable()
                        //->preserveFilenames()
                        ->panelLayout('flex')
                        ->openable()
                        ->reorderable()
                        ->previewable()
                        ->uploadingMessage('Uploading attachment...')->nullable()
                    ])
                ])
                
            ])->columns(3);
    }
                
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label("")->circular()->size(50),
                TextColumn::make('title')->sortable()->searchable(),
                TextInputColumn::make('description')
                ->placeholder('Εισάγετε σύντομη περιγραφή...')
                ->rules(['max:100']),
                TextColumn::make('category.name')->label('Category')->sortable()->searchable(),
                ColorColumn::make('color'),
                IconColumn::make('finished')
                ->icon(fn (string $state): string => self::getIconState($state, ['0' => '',
                    '1' => 'heroicon-o-check-circle',]))
                ->color('primary')
                ->sortable()
                ->label("Finished"),
                
                // TextInput::make('attachments')
                //     ->label('Download Attachments')
                //     ->url()
    
            ])
            ->filters([
                Filter::make('Finished Projects')->query(
                    function (Builder $query): Builder {
                        return $query->where('finished', true);
                    }
                ),
                PriceFilter::make('budget')->label("Προυπολογισμός")->slider()->currency(currency: 'EUR')
                ->min(1000)
                ->max(fn () => Cache::flexible('max_budget', [30, 60], function () {
                    return Post::max('budget');
                })),
                SelectFilter::make('category_id')
                ->label('Category')
                // ->options(Category::all()->pluck('name','id'))
                ->relationship('category','name')
                ->preload(1)
                ->multiple(),
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->visible(fn () => auth()->user()->isAdmin),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PartnersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
