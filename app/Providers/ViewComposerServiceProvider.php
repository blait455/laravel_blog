<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
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

        view()->composer('frontend.layout.includes._partials_articles.sidebar', function($view){
            $popularPosts = Post::published()->popular()->take(3)->get();
            return $view->with('popularPosts', $popularPosts);
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
