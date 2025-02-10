<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HelloWorld', function () {
    return 'Hello Laravel';
});

Route::get('/user/{name?}', function ($name = null) {
    if ($name) {
        return 'Your name is ' . $name;
    } else {
        return 'No name provided';
    }
});