<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', function () {
    return view('pages.dashboard');
}); */
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    Route::resource('user', UserController::class);
});

Route::get('/', function () {
    return view('pages.auth.login');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard', ['type_menu' => 'dashboard']);
});
/* 
Route::get('/login', function () {
    return view('pages.auth.login');
});
Route::get('/register', function () {
    return view('pages.auth.register');
}); */


/*  Route::get('/users', function () {
     return view('pages.users.index');
 }); */