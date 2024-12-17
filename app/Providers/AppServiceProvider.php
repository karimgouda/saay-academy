<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Promise;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('companies') && Schema::hasTable('promises')) {
            View::share('companies', Company::limit(4)->get());
            View::share('promises', Promise::limit(4)->get());
        }

        Health::checks([
            // UsedDiskSpaceCheck::new(),
            DatabaseCheck::new(),
        ]);
        
    }
}
