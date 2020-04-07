<?php

namespace App\Http\View\Composers;

use App\News;
use Illuminate\View\View;


class NewsComposer{

    public function compose(View $view){

        $news = News::latest()->limit(5)->get();

        return $view->with('news', $news);
    }
}