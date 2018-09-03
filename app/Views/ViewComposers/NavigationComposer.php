<?php

namespace App\Views\ViewComposers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $this->composeCategories($view);
        $this->composePopularPosts($view);
    }

    private function composeCategories(View $view)
    {
        $categories = Category::with(['posts' => function($query){
        $query->where('published_at', '<=', Carbon::now());
        }])->orderBy('title', 'asc')->get();

        $view->with('categories', $categories);
    }

    private function composePopularPosts(View $view)
    {
        $popularPosts = Post::published()->popular()->take(3)->get();
        $view->with('popularPosts', $popularPosts);
    }
}