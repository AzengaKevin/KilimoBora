<?php

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/products', 'PagesController@products')->name('products');

Route::resources([
    'categories' => 'CategoryController',
]);

Route::view('test', 'layouts.app');
