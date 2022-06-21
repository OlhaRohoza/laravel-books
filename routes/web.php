<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('index/index');
})->name('homepage');

Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about-us');
// Route::get('/', [BooksController::class, 'latestBooks'])->name('latest-books');

Route::get('book/{book_id}', [BooksController::class, 'show']);
Route::post('/book/{book_id}/review', [ReviewController::class, 'store'])->name('book-review');
