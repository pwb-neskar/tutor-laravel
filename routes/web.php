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
    Route::get('/genre/{id}', 'show')->name('genre.show');
    Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/{id}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'delete')->name('genre.delete');
});