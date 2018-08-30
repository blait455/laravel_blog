<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //------------------------------- scope ------------------------------------------//
    public function scopeAllCategories($query)
    {
        return $query->with(['posts' => function($query)
        {
            $query->where('published_at', '<=', Carbon::now());     // check and show only published posts
        }])->orderBy('title', 'asc')->get();
    }


    //--------------------------- Relation ---------------------------------------------//
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
