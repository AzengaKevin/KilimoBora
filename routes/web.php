<?php

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/history', 'PagesController@history')->name('history');
Route::get('/vision', 'PagesController@vision')->name('vision');
Route::get('/core', 'PagesController@core')->name('core');

Route::resources([
    'categories' => 'CategoryController',
    'posts' => 'PostController',
    'news' => 'NewsController',
]);

//Comments routes
Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');
Route::view('test', 'layouts.app');

//Elevated Users Routes
Route::name('admin.')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::resources([
            'news' => 'Admin\NewsController'
        ]);
    });
});
