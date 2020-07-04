<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/popular', 'MovieController@index');
