<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = ['title', 'content', 'when', 'venue'];

    /** 
     * Polymorphic relationship for the event image 
     * 
     * @return mixed relationship
     * */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /** 
     * Utility function to return the event image or the default image
     * 
     * @return string The Image url
     */
    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->url;
    }
}
