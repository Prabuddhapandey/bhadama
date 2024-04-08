<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public function boot()
    {
        View::composer('*', function ($view) 
        {
            $userId = auth()->id();
            $view->with('userId', $userId);
        });
}
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
}
