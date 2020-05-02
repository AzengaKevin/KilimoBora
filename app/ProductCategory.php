<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * A relationship conneting products with their category
     * 
     * @return mixed
     */
    public function product()
    {
        return $this->hasMany(product::class);
    }
}
