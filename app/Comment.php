<?php

namespace VideoBlog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];


    public function post()
    {
        return $this->belongsTo('VideoBlog\Post');
    }

    public function user()
    {
        return $this->belongsTo('VideoBlog\User');
    }

}
