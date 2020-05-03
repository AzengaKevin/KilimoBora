<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * Fillable properties of the table
     */

    protected $fillable = ['name', 'title', 'facebook', 'twitter'];

     /**
      * Member image relationship function
      * 
      * A polymorphic relationship
      */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * Utility function
     * 
     * Gets the image of the newy added member
     */
    public function imageUrl()
    {
        return is_null($this->image) ? '/img/avatar.png' : $this->image->thumb_url;
    }
}
