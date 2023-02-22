<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
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

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Category
Route::prefix('/category')->group(function () {
    Route::get('/marbel_edu_games', [ProductController::class, 'marbel_edu_games']);
    Route::get('/marbel_and_friends_kids_games', [ProductController::class, 'marbel_and_friends_kids_games']);
    Route::get('/riri_story_books', [ProductController::class, 'riri_story_books']);
    Route::get('/kolak_kids_songs', [ProductController::class, 'kolak_kids_songs']);
});

// News
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{tampil}', [NewsController::class, 'tampil']);

// Program
Route::prefix('/Program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan_industri', [ProgramController::class, 'kunjungan_industri']);
});

// About
Route::get('/about_us', [AboutController::class, 'about_us']);

// Contact
Route::get('/kontak', [ContactController::class, 'index']);