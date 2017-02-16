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

Route::get('/', [
    'uses' => 'IndexController@index',
    'as' => 'index.index'
]);

Route::get('/post/{post}', [
    'uses' => 'IndexController@post',
    'as' => 'index.post'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
