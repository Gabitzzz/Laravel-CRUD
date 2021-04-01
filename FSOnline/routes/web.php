<?php

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

//Route::view('/','index')->name('index');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/movies', [\App\Http\Controllers\MoviesController::class, 'index'])->name('movies');
Route::post('/movies', [\App\Http\Controllers\MoviesController::class,'store'])->name('movies.store');
Route::get('movies/{id}', [\App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');
Route::get('movies/{id}/edit', [\App\Http\Controllers\MoviesController::class, 'edit'])->name('movies.edit');
Route::put('movies/{id}', [\App\Http\Controllers\MoviesController::class, 'update'])->name('movies.update');
Route::delete('movies/{id}', [\App\Http\Controllers\MoviesController::class, 'destroy'])->name('movies.destroy');


