<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('/');

Route::resource('/blogs', PostsController::class);

// auth
Route::get('/login', [Authentication::class, 'login'])->name('login');
Route::get('/register', [Authentication::class, 'register'])->name('register');
Route::get('/logout', [Authentication::class, 'logout'])->name('logout');

Route::post('/registration', [Authentication::class, 'registration'])->name('registration');
Route::post('/signIn', [Authentication::class, 'signIn'])->name('signIn');

