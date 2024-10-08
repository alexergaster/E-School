<?php

use App\Http\Controllers\ContactSendController;
use App\Http\Controllers\MC\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/master_class', StoreController::class)->name('mc.store');

Route::post('/contact', ContactSendController::class)->name('contact.send');

