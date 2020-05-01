<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{id}', 'BlogController@show');
Route::get('blog/create', 'BlogController@create');
Route::post('blog/create', 'BlogController@store');
