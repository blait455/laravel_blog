<?php

namespace App\Providers;

use App\Models\Category;
use Carbon\Carbon;
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
        view()->composer('frontend.layout.includes._partials._menu', function ($view){
            $categories = Category::with(['posts' => function($query){
                $query->where('published_at', '<=', Carbon::now());
            }])->orderBy('title', 'asc')->get();

            return $view->with('categories', $categories);
        });

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
