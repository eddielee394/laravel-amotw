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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    //Auth Routes
    Auth::routes(['verify' => true]);
});

//View Routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    //Resource Routes
    Route::resource('posts', 'API\\PostsAPIController');

    Route::get('/dashboard', 'DashboardController@index')->name(
        'dashboard.index'
    );

    Route::view('/dashboard/{path?}', 'dashboard');
});
