<?php

use Illuminate\Support\Facades\Route;

// general pages and routes
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('about', function () {
    return view('about');
});

// blog routes
Route::get('blog', 'BlogController@index')->name('blog.index');
Route::post('blog', 'BlogController@store')->name('blog.store');
Route::get('blog/create', 'BlogController@create')->name('blog.create')->middleware('auth');
Route::get('blog/{blog}', 'BlogController@show')->name('blog.show');
Route::delete('blog/{blog}', 'BlogController@destroy')->name('blog.destroy');

// tag routes
Route::get('tags/create', 'TagController@create')->name('tags.create')->middleware('auth');
Route::post('tags/create', 'TagController@store')->name('tags.store');
Route::delete('tags/{tag}', 'TagController@destroy')->name('tags.destroy');

// auth routes
Auth::routes();

// dashboard routes
Route::get('/home', 'HomeController@index')->name('home');
