<?php

namespace App\Http\View\Composers;

use App\ProductCategory;
use Illuminate\View\View;


class ProductCategoriesComposer{

    public function compose(View $view){

        $categories = ProductCategory::latest()->limit(5)->get();

        return $view->with('categories', $categories);
    }
}