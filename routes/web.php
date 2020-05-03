<?php

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/product', 'PagesController@products')->name('products');
Route::get('/history', 'PagesController@history')->name('history');
Route::get('/vision', 'PagesController@vision')->name('vision');
Route::get('/core', 'PagesController@core')->name('core');

Route::resources([
    'posts' => 'PostController',
    'news' => 'NewsController',
]);

//Front End Events
Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/events/{event}', 'EventController@show')->name('events.show');

//Front End Product
Route::get('/products', 'ProductController@index')->name('products.index');

//Guest making contact
Route::post('/contact', 'ContactController@store')->name('contact.store');

//Comments routes
Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');
//Route::view('test', 'layouts.app');

//Elevated Users Routes
Route::name('admin.')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::resources([
            'news' => 'Admin\NewsController',
            'carousels' => 'Admin\CarouselController',
            'events' => 'Admin\EventController',
            'categories' => 'Admin\CategoriesController',
            'product_categories' => 'Admin\ProductCategoryController',
            'products' => 'Admin\ProductController',
            'members' => 'Admin\MemberController',
        ]);

        Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
        
        //Contact Routes
        Route::get('/contacts', 'Admin\ContactsController@index')->name('contacts.index');
        Route::delete('/contacts/{contact}', 'Admin\ContactsController@destroy')->name('contacts.destroy');
    });
});

//Route::view('backend', 'layouts.backend');
