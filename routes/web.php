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

Route::get('/', 'IndexController')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/person', 'PersonController');
Route::resource('/blog', 'BlogController');
Route::get('/contact/form', 'ContactController@form')->name('contact.form');

Route::group(['namespace' => 'Service', 'prefix' => 'service'], function () {
    Route::apiResource('province', 'ProvinceController');
});
