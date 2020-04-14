<?php

namespace App\Http\View\Composers;

use App\Product;
use Illuminate\View\View;


class ProductsComposer{

    public function compose(View $view){

        $products = Product::latest()->limit(5)->get();

        return $view->with('products', $products);
    }
}