<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/signup', [LoginController::class, 'signup']);



Route::middleware(['login'])->group(
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    }
);

// Route::get('/home',[HomeController::class,'index'])->name('home');
