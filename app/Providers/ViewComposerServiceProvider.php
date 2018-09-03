<?php

namespace App\Providers;

use App\Views\ViewComposers\NavigationComposer;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.layout.includes._partials._menu', NavigationComposer::class);
        view()->composer('frontend.layout.includes._partials_articles.sidebar', NavigationComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
