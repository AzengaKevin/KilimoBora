<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function productCategory()
    {
        return $this->belongsTo(productCategory::class);
    }
}
