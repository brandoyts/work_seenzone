<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;

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


Auth::routes();


// client routes
Route::get('/', [ClientController::class, 'index'])->name('home');
Route::post('/', [ClientController::class, 'book'])->name('book');

// admin routes
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/appointment', [AdminController::class, 'getAppointment'])->name('appointment');
Route::get('/services', [AdminController::class, 'getServices'])->name('services');
