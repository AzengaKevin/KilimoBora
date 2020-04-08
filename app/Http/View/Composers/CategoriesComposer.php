<?php

namespace App\Http\View\Composers;

use App\Category;
use Illuminate\View\View;


class CategoriesComposer{

    public function compose(View $view){

        $categories = Category::latest()->limit(5)->get();

        return $view->with('categories', $categories);
    }
}