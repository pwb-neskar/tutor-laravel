<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

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

Route::view('/master', 'template.master');
Route::view('/test', 'test');

// Route Untuk mengelola GenreController
Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{genre}/edit', 'edit')->name('genre.edit');
    Route::get('/genre/{genre}', 'show')->name('genre.show');
    Route::put('/genre/{genre}', 'update')->name('genre.update');
    Route::delete('/genre/{genre}', 'delete')->name('genre.delete');
});