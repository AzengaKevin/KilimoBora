<?php

namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Carousel;

class SlidersComposer{

    public function compose(View $view){
        $sliders = Carousel::latest()->limit(3)->get();

        return $view->with('sliders', $sliders);
    }
}