<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonyController;
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

// TAMPILAN AWAL AKAN MERUJUK KE HALAMAN HOME
Route::get('/', function () {
    return redirect('/home');
});

// PENAMAAN MASING - MASING ROUTE = BUAT NYARI TAB YANG INGIN DICARI
Route::get('home', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/gallery', GalleryController::class)->name('gallery');
Route::get('/testimony', TestimonyController::class)->name('testimony');
