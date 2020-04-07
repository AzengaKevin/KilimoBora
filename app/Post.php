<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postImageUrl()
    {
        return !is_null($this->image) ? $this->image->thumb_url : '/img/noimage.png';
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->url;
    }
}
