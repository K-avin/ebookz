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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/add-book', [App\Http\Controllers\BooksController::class, 'viewAddBooksForm'])->name('addBooks');
Route::post('/store-book', [App\Http\Controllers\BooksController::class, 'addBooks'])->name('save-book');
// ->middleware('auth');