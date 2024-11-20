<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Tables;
use App\Models\Proposal;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProposals extends BaseWidget
{

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = "full";

    private static function isAdmin() {
        return auth()->user()->isAdmin;
    }

    
    
    public function table(Table $table): Table
    {
        return $table
            ->heading(static::isAdmin() ? "Τελευταίες Προτάσεις" : "Οι προτεινόμενες προτάσεις μου")
            ->paginated(false)
            ->striped()
            ->query(fn () =>
                 self::isAdmin() ? Proposal::query()->limit(5) : Proposal::where("author_id", auth()->user()->id)->limit(5)
            )
            ->columns([
                // Title Column
            TextColumn::make('title')
            ->label('Όνομα')
            ->sortable(),

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

            
            TextColumn::make('coordinator.name')
                ->label('Διαχειριστής')
                ->badge()
                ->color("info"),

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
            ->sortable()
            ])
            ->actions([
                EditAction::make()
                    ->label('')->url(fn (Proposal $record): string => "admin/proposals/$record->id/edit")
                
            ]);
    }
}
