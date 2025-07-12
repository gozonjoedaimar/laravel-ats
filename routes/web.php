<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');
