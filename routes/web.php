<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    GenreController,
    CastController,
    RegisterController,
    AuthController,
    DashboardController,
};



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

Route::controller(AuthController::class)->group(function() {
    Route::get('login', 'login')->name('login.login');
    Route::post('authenticate', 'authenticate')->name('login.authenticate');
    Route::post('logout', 'logout')->name('login.logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard/user', 'user')->name('dashboard.user');
    Route::post('/dashboard/admin', 'admin')->name('dashboard.admin');
});


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


Route::resource('/cast', CastController::class);