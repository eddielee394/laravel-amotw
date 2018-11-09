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

use App\Http\Controllers\PostController;

Route::group([ 'middleware' => ['web']], function () {
    //Auth Routes
    Auth::routes(['verify' => true]);

    Route::get( '/', 'PostController@index')->name('posts.index');
});

//View Routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    //Resource Routes
    Route::resource('posts', 'PostController')->except(['index']);
});
