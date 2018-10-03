<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteAddress extends Model
{
    protected $fillable = ['name', 'address'];

    //--------------------------- Relation ---------------------------------------------//
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
