<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function()
{ return View::make('pages.home'); });
