<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/features', [PageController::class, 'features'])->name('features');

