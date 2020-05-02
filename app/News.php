<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /**
     * Relationship function
     * Shows the relationship between the news and who added the news i.e. the owner
     * 
     * @return mixed
     */
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

    /**
     * Util function 
     * To help get the url to image or defaul image for the news
     * 
     * @return string url
     */
    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->url;
    }
}
