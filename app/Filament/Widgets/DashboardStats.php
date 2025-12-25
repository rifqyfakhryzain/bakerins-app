<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->icon('heroicon-o-cube')
                ->color('success'),

            Stat::make('Total Categories', Category::count())
                ->icon('heroicon-o-tag')
                ->color('info'),
        ];
    }
}
