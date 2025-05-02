<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    function posts()
    {
        // return $this->belongsToMany(Tag::class, 'post_tag','post_id','tag_id');
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
