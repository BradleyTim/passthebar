<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', 'BlogController@index')->name('blog.index');
Route::post('blog', 'BlogController@store')->name('blog.store');
Route::get('blog/create', 'BlogController@create')->name('blog.create')->middleware('auth');
Route::get('blog/{id}', 'BlogController@show')->name('blog.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
