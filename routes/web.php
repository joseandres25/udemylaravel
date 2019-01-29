<?php

    /*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');




        Route::get('/admin/contacts','ContactsController@index');



        /*
        Route::get('/products', 'ProductController@index');
        Route::get('/products/create', 'ProductController@create');
        Route::post('/products', 'ProductController@store');
        Route::get('/products/{product}/edit', 'ProductController@edit');
        Route::put('/products/{product}', 'ProductController@update');
        Route::delete('/products/{product}', 'ProductController@destroy');
        Route::get('/products/{product}/images', 'ImageController@index');
        Route::post('/products/{product}/images', 'ImageController@store');
        Route::delete('/products/{product}/images/{product_image}', 'ImageController@destroy');
        Route::post('/products/{product}/images/{product_image}', 'ImageController@select');
        Route::get('/categories', 'CategoryController@index');
        Route::get('/categories/create', 'CategoryController@create');
        Route::post('/categories', 'CategoryController@store');
        Route::get('/categories/{category}/edit', 'CategoryController@edit');
        Route::put('/categories/{category}', 'CategoryController@update');
        Route::delete('/categories/{category}', 'CategoryController@destroy');*/

