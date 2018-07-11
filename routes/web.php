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



Auth::routes();

Route::get('/', 'BokeController@index')->name('boke.index');

Route::get('/odais', 'OdaiController@index')->name('odai.index');



// Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    
    
    Route::group(['prefix' => 'bokes/{id}'], function () {
        Route::post('favorite', 'UserFavoriteController@store')->name('user.favorite');
        Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');    
        
    });

    Route::resource('bokes', 'BokeController', ['only' => ['store', 'destroy']]);
    // });