<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Resource Routes
Route::resource('posts', 'PostsAPIController');
//View Routes
Route::group(['middleware' => ['auth', 'auth:api', 'verified']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
