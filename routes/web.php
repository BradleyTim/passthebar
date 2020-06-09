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
Route::post('blog', 'BlogController@store')->name('blog.store')->middleware('auth');
Route::get('blog/create', 'BlogController@create')->name('blog.create')->middleware('auth');
Route::get('blog/{blog}', 'BlogController@show')->name('blog.show');
Route::put('blog/{blog}', 'BlogController@update')->name('blog.update')->middleware('auth');
Route::get('blog/{blog}/edit', 'BlogController@edit')->name('blog.edit')->middleware('auth');;
Route::delete('blog/{blog}', 'BlogController@destroy')->name('blog.destroy')->middleware('auth');

// tag routes
Route::post('tags', 'TagController@store')->name('tags.store');
Route::get('tags/create', 'TagController@create')->name('tags.create')->middleware('auth');
Route::put('tags/{tag}', 'TagController@update')->name('tags.update');
Route::get('tags/{tag}/edit', 'TagController@edit')->name('tags.edit');
Route::delete('tags/{tag}', 'TagController@destroy')->name('tags.destroy');

// auth routes
Auth::routes();

// dashboard routes
Route::get('/home', 'HomeController@index')->name('home');
