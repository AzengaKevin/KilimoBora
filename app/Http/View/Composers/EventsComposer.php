<?php

namespace App\Http\View\Composers;

use App\Event;
use Illuminate\View\View;


class EventsComposer{

    public function compose(View $view){

        $events = Event::latest()->limit(5)->get();

        return $view->with('events', $events);
    }
}