<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//
Route::resource('index','IndexController');
Route::resource('zeus','AdminIndexController');
Route::get('zeus/contact','AdminIndexController@show');
Route::resource('contact','ContactController');
Route::resource('about','AboutController');
Route::resource('admission','admission');
Route::resource('blog','BlogController');
Route::resource('event','EventController');
Route::resource('gallery','GalleryController');
Route::resource('teacher','TeachersController');
Route::resource('adminblog', 'NewsController');
Route::get('adminblog/delete/{id}', 'NewsController@destroy');
Route::resource('adminevent', 'adminEventController');
Route::get('adminevent/delete/{id}', 'adminEventController@destroy');
Route::resource('admingallery', 'admingalleryController');
Route::get('admingallery/delete/{id}', 'admingalleryController@destroy');
