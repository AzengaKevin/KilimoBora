<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name', 'description'];

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
