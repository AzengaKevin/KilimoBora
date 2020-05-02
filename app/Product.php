<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price','description', 'product_category_id'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function imageUrl(){
        return is_null($this->image) ? "/img/bg-img/noimage.png" : $this->image->thumb_url;
    }

}
