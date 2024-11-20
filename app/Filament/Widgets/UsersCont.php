<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Partner;
use App\Models\Post;
use App\Models\User;
use App\Models\Proposal;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UsersCont extends BaseWidget
{

    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Έργα', Post::count())
            ->description('Συνολική καταμέτρηση Έργων')
            ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
            ->chart([0, Post::count()])
            ->color('success')
            ->url("/admin/posts"),
            Stat::make('Προτάσεις', Proposal::count())
            ->description('Συνολικός αριθμός προτάσεων')
            ->descriptionIcon('heroicon-o-academic-cap', IconPosition::Before)
            ->chart([0, Proposal::count()])
            ->color('info')
            ->url("/admin/proposals"),
            Stat::make('Partners', Partner::count())
            ->label("Εταίροι")
            ->description('Συνολικοί Συνεργάτες')
            ->descriptionIcon('heroicon-o-globe-alt', IconPosition::Before)
            ->chart([0, Partner::count()])
            ->color('primary')
            ->url("/admin/partners")
        ];
    }
}
