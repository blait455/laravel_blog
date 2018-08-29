<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // TODO: load image 009 from user image directory, create an accessor or mutator

    //--------------------------- accessor & mutator -----------------------------------//
    public function getDateAttribute($value)
    {
       return $this->created_at->diffForHumans();
    }

    //--------------------------- accessor & mutator -----------------------------------//
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    //--------------------------- Relation ---------------------------------------------//

    public function author()
    {
        return $this->belongsTo(User::class);
    }

}
