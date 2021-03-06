<?php

namespace VideoBlog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('VideoBlog\Comment');
    }

}
