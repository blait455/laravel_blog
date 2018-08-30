<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{



    //--------------------------- Relation ---------------------------------------------//
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
