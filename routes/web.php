<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
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
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => '/admin'], function () {
    Route::group(['namespace' => 'Program'], function () {
        Route::get('/programs', IndexController::class)->name('admin.programs.index');
    });
    Route::group(['namespace' => 'Staff'], function () {
        Route::get('/staff', IndexController::class)->name('admin.staff.index');
        Route::get('/staff/create', CreateController::class)->name('admin.staff.create');
        Route::post('/staff', StoreController::class)->name('admin.staff.store');
        Route::get('/staff/{id}/edit', EditController::class)->name('admin.staff.edit');
        Route::patch('/staff/{id}', UpdateController::class)->name('admin.staff.update');
        Route::delete('/staff/{id}', DestroyController::class)->name('admin.staff.destroy');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::group(['namespace' => 'App\Http\Controllers\Program'], function () {
    Route::get('programs', IndexController::class)->name('programs.index');


    Route::get('programs/{program}', ShowController::class)->name('programs.show');
});
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/price', [PriceController::class, 'index'])->name('price.index');
Route::get('/about', function () {
    return view('about');
})->name('about.index');
Route::group(['namespace' => 'App\Http\Controllers\Gallery'], function () {
    Route::get('/gallery', IndexController::class)->name('gallery.index');
});


Route::group(['namespace' => 'App\Http\Controllers\MC'], function () {
    Route::get('/master_class', IndexController::class)->name('mc.index');
    Route::get('/master_class/{id}', ShowController::class)->name('mc.show');
});
