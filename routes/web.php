<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', 'BlogController@index')->name('blog.index');
Route::get('blog/{id}', 'BlogController@show')->name('blog.show');
Route::get('blog/create', 'BlogController@create')->name('blog.create');
Route::post('blog/create', 'BlogController@store')->name('blog.store');
