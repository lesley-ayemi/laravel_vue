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


//this will solve the issue of 404 page when user searches for a page on our site directly
//this will searchy for any part that matches this content
Route::get('{path}', "HomeController@index")->where( 'path', '([A-z\d\-\/_.]+)?', 'path');
