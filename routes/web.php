<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

// Route::get('/', 'ProductController@getIndex');
// Route::get('/signup','UserController@getSignup');
// Route::post('/signup','UserController@postSignup');



Route::group(['prefix' => 'user'], function () {
    // Group Route
    Route::group(['middleware' => 'guest'], function () {

        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup',
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup',
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin',
            'middlewre' => 'guest'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin',
            'middlewre' => 'guest'
        ]);
    });

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout',
        ]);
    });
});

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart',
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne',
]);

//RemoveItem Route
Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove',
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart',
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
