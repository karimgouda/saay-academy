<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;


Route::middleware('maintenance')->group(function() {
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function(){

            Route::get('/', function() { return redirect()->route('site.home'); });

            Route::as('site.')->controller(MainController::class)->group(function() {
                Route::get('/home', 'home')->name('home');
                Route::get('/about', 'about')->name('about');
                Route::get('/services', 'services')->name('services');
                Route::get('/contact', 'contact')->name('contact');
                Route::post('/contact', 'storeContact')->name('contact.store');
                Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
                Route::get('/terms-conditions', 'termsConditions')->name('terms-conditions');
            });
            
    });
});

Route::get('health', HealthCheckJsonResultsController::class);

Route::get('/test', function() {
});