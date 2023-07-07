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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');
Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index'])->name('home');
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create'])->name('home');
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store'])->name('home');
Route::get('/golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit'])->name('home');
Route::patch('/golongan/{id}/', [App\Http\Controllers\GolonganController::class, 'update'])->name('home');
Route::delete('/golongan/{id}/', [App\Http\Controllers\GolonganController::class, 'destroy'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('home');
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('home');
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store'])->name('home');
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit'])->name('home');
Route::patch('/pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'update'])->name('home');
Route::delete('/pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('home');


