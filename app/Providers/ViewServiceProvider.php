<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\NewsComposer;
use App\Http\View\Composers\SlidersComposer;
use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\ProductCategoriesComposer;
use App\Http\View\Composers\EventsComposer;
use App\Http\View\Composers\ProductsComposer;

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
        View::composer(['posts.index', 'posts.create', 'events.index', 'admin.news.edit'], CategoriesComposer::class);
        View::composer(['pages.index'], EventsComposer::class);
        View::composer(['pages.index'], SlidersComposer::class);
        View::composer(['pages.index', 'admin.products.edit'], ProductCategoriesComposer::class);
        View::composer(['news.index', 'posts.index'], ProductsComposer::class);
    }
}
