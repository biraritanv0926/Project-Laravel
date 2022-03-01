<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class Tag extends Model
{
    public function blogPosts()
    {
        return $this->morphedByMany('App\Models\BlogPost', 'taggable')->withTimestamps()->as('tagged');
    }

    public function comments()
    {
        return $this->morphedByMany('App\Models\Comment', 'taggable')->withTimestamps()->as('tagged');
    }
}