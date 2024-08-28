<?php

use App\Http\Controllers\Gallery\IndexController as GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\Program\IndexController;
use App\Http\Controllers\Program\ShowController;
use App\Http\Controllers\StaffController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/price', [PriceController::class, 'index'])->name('price.index');
Route::get('/about', function () {
    return view('about');
})->name('about.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::group([], function () {
    Route::get('programs', IndexController::class)->name('programs.index');


    Route::get('programs/{program}', ShowController::class)->name('programs.show');
});
