<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index')->name('/');

Route::get('/show/public/{id}','TopController@publicShow')->name('publicShow');

Route::get('/show/private/{id}','TopController@privateshow')->name('privateShow');

Route::get('/review','TopController@create')->name('create');

Route::post('/review/store','TopController@store')->name('store');

Route::get('/review/edit/{id}','TopController@edit')->name('edit');

Route::post('/review/edit','TopController@update')->name('update');

Route::post('/review/edit/delete','TopController@delete')->name('delete');

Route::post('/review/indexSearch', 'TopController@indexSearch')->name('indexSearch');

Route::post('/review/homeSearch', 'TopController@homeSearch')->name('homeSearch');

Route::post('/review/public', 'TopController@public')->name('public');

Route::post('/review/private', 'TopController@private')->name('private');

Route::get('/description', 'TopController@description')->name('description');

Route::post('/contact', 'ContactController@contact')->name('contact');
