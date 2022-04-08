<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;

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

//home
Route::get('/', function(){
    // dd(auth()->user()->posts);
    return view('home');
});
//login
Route::get('/login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//register
Route::get('/register', [RegisterController::class, 'view'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//reviews
Route::get('/review', [ReviewController::class, 'view']);
Route::post('/review', [ReviewController::class, 'store']);
Route::put('/review/{id}', [ReviewController::class, 'update']);
Route::delete('/review/{id}', [ReviewController::class, 'destroy']);
