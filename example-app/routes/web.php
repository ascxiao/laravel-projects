<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

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


Route::get('/hello', function () {
    return 'Hello Laravel';
}) -> name('greeting');

Route::get('/show-greeting',[WelcomeController::class, 'showGreeting']);
Route::get('/redirect-greeting',[WelcomeController::class, 'redirectGreeting']);

Route::get('/user_form', function () {
    return view('user_form');
});

//GET with Optional Parameters
Route::get('/user/{name?}', function ($name = null) {
    if ($name) {
        return 'The lord be with and with your name, ' . $name;
    } else {
        return 'No name provided';
    }
});

Route::get('/about_me', function(){
    return view('About_me');
});

// POST Request
Route::post('/submit-form', [UserController::class, 'submitForm']);

// PUT Request
Route::put('/update-user/{id}', [UserController::class, 'updateUser']);

// PATCH Request
Route::patch('/modify-user/{id}', [UserController::class, 'modifyUser']);

// DELETE Request
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser']);

//*------------PORTFOLIO ROUTES--------------*//

//Route::get('/', [userController::class, 'index']);
// Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');