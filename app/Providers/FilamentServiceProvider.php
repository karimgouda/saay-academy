<?php

namespace App\Providers;

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;


class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                // NavigationGroup::make()
                //     ->label('Settings')
                //     ->icon('heroicon-s-cog')
                //     ->collapsed(),
            ]);
        });

        Filament::registerNavigationGroups([
            'Home Page',
            'About Page',
            'Services Page',
            'Contact Page',
            'Privacies and Terms',
            'Shared',
            'Settings',
            'Translation',
        ]);

        Gate::define('use-translation-manager', function (?User $user) {
            // return $user !== null && $user->hasRole('admin');
            return true;
        });
    }
}
