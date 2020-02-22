<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index');
