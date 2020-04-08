<?php

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/products', 'PagesController@products')->name('products');

Route::resources([
    'categories' => 'CategoryController',
    'posts' => 'PostController',
    'news' => 'NewsController',
]);

//Front End Routes
Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/events/{event}', 'EventController@show')->name('events.show');

//Comments routes
Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');
Route::view('test', 'layouts.app');

//Elevated Users Routes
Route::name('admin.')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::resources([
            'news' => 'Admin\NewsController',
            'carousels' => 'Admin\CarouselController',
            'events' => 'Admin\EventController',
        ]);
    });
});
