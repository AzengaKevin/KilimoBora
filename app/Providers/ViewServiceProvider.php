<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\NewsComposer;
use App\Http\View\Composers\SlidersComposer;
use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\EventsComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['pages.index', 'posts.index', 'events.index', 'partials.footer'], NewsComposer::class);
        View::composer(['pages.index', 'posts.index', 'posts.create', 'events.index'], CategoriesComposer::class);
        View::composer(['pages.index'], EventsComposer::class);
        View::composer(['pages.index'], SlidersComposer::class);
    }
}
