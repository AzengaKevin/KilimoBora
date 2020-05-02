<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Image extends Model
{
    protected $guarded = [];

    public function imageable()
    {
        return $this->morphTo();
    }
    
    /**
     * Util function
     * Delete the image files from storage
     */
    public function deleteFromStorage()
    {
        //Original
        if(file_exists(public_path($this->url))){
            File::delete(public_path($this->url));
        }

        //Thumbnail
        if(file_exists(public_path($this->thumb_url))){
            File::delete(public_path($this->thumb_url));
        }
    }
}
