<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index');

Route::get('/show/{id}','TopController@show')->name('show');

Route::get('/review','TopController@create')->name('create');

Route::post('/review/store','TopController@store')->name('store');

Route::get('/review/edit/{id}','TopController@edit')->name('edit');

Route::post('/review/edit','TopController@update')->name('update');
