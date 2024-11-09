<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/log', [HomeController::class, 'login_index'])->name('log.index');
Route::get('/login', [HomeController::class, 'login_request'])->name('log.request');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');