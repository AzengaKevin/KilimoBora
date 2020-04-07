<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = ['title', 'description', 'button_url', 'button_text'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->thumb_url;
    }
}
