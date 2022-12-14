<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Board;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.main', function ($view) {
            $view->with('boards', Board::all());
        });

        Paginator::useBootstrapFive();
    }
}
