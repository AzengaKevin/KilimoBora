<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Polymorphic relationship for the image
     * @return mixed, A relationship of the news to the image
     */
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->url;
    }
}
