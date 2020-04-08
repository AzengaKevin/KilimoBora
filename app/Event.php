<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = ['title', 'content', 'when', 'venue'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->url;
    }
}
