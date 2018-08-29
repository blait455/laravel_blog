<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];
    // TODO: load image 009 from user image directory, create an accessor or mutator

    //--------------------------- accessor & mutator -----------------------------------//
    public function getDateAttribute($value)
    {
       return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    //------------------------------- scope ------------------------------------------//
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Show only published posts
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }

    //--------------------------- Relation ---------------------------------------------//

    public function author()
    {
        return $this->belongsTo(User::class);
    }

}
