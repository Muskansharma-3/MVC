<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

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
        
        View::share('class',"K22RS");
        Route::pattern('name', '[A-Za-z]+');
        Route::pattern('id', '[0-9]+');
        Route::pattern('age', '[0-9]+');
    }
}
