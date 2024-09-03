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

Route::prefix('admin')->group(function () {
    Route::namespace('App\Http\Controllers\Auth\Admin')->group(function () {
        Route::get('login', IndexController::class)->name('admin.login');
        Route::post('login', LoginController::class);
        Route::post('logout', LogoutController::class)->name('admin.logout');
    });

    Route::middleware('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
        Route::get('/', function () {
            return view('admin.home');
        })->name('admin.home');

        Route::namespace('Program')->group(function () {
            Route::get('/programs', IndexController::class)->name('admin.programs.index');
            Route::get('/programs/create', CreateController::class)->name('admin.programs.create');
            Route::post('/programs', StoreController::class)->name('admin.programs.store');
            Route::get('/programs/{id}/edit', EditController::class)->name('admin.programs.edit');
            Route::patch('/programs/{id}', UpdateController::class)->name('admin.programs.update');
            Route::delete('/programs/{id}', DestroyController::class)->name('admin.programs.destroy');

            Route::group(['namespace' => 'Section'], function () {
                Route::get('/programs/{id}/sections', IndexController::class)->name('admin.sections.index');
                Route::get('/programs/{program}/sections/{section}/edit', EditController::class)->name('admin.sections.edit');
                Route::get('/programs/{program}/sections/create', CreateController::class)->name('admin.sections.create');
                Route::post('/programs/{program}/sections', StoreController::class)->name('admin.sections.store');
                Route::patch('/programs/{program}/sections/{section}', UpdateController::class)->name('admin.sections.update');
                Route::delete('/programs/{program}/sections/{section}', DestroyController::class)->name('admin.sections.destroy');
            });
        });
        Route::group(['namespace' => 'Staff'], function () {
            Route::get('/staff', IndexController::class)->name('admin.staff.index');
            Route::get('/staff/create', CreateController::class)->name('admin.staff.create');
            Route::post('/staff', StoreController::class)->name('admin.staff.store');
            Route::get('/staff/{id}/edit', EditController::class)->name('admin.staff.edit');
            Route::patch('/staff/{id}', UpdateController::class)->name('admin.staff.update');
            Route::delete('/staff/{id}', DestroyController::class)->name('admin.staff.destroy');
        });
        Route::group(['namespace' => 'MC'], function () {
            Route::get('/mc', IndexController::class)->name('admin.mc.index');
            Route::patch('/mc/{id}', UpdateController::class)->name('admin.mc.update');
            Route::delete('/mc/{id}', DestroyController::class)->name('admin.mc.destroy');
        });
        Route::namespace('Parent')->group(function () {
            Route::get('/parents', IndexController::class)->name('admin.parents.index');
            Route::get('/parents/{id}/edit', EditController::class)->name('admin.parents.edit');
            Route::get('/parents/create', CreateController::class)->name('admin.parents.create');
            Route::post('/parents', StoreController::class)->name('admin.parents.store');
            Route::patch('/parents/{id}', UpdateController::class)->name('admin.parents.update');
            Route::delete('/parents/{id}', DestroyController::class)->name('admin.parents.destroy');
        });
        Route::group(['namespace' => 'Student'], function () {
            Route::get('/students', IndexController::class)->name('admin.students.index');
            Route::get('/students/{id}/edit', EditController::class)->name('admin.students.edit');
            Route::patch('/students/{id}', UpdateController::class)->name('admin.students.update');
            Route::get('/students/create', CreateController::class)->name('admin.students.create');
            Route::post('/students', StoreController::class)->name('admin.students.store');
            Route::delete('/students/{id}', DestroyController::class)->name('admin.students.destroy');
        });
        Route::group(['namespace' => 'Group'], function () {
            Route::get('/groups', IndexController::class)->name('admin.groups.index');
            Route::get('/groups/create', CreateController::class)->name('admin.groups.create');
            Route::get('/groups/{id}/edit', EditController::class)->name('admin.groups.edit');
            Route::patch('/groups/{id}', UpdateController::class)->name('admin.groups.update');
            Route::post('/groups', StoreController::class)->name('admin.groups.store');
            Route::delete('/groups/{id}', DestroyController::class)->name('admin.groups.destroy');

            Route::group(['namespace' => 'Student'], function () {
                Route::get('/groups/{id}/students', IndexController::class)->name('admin.groups.students.index');
                Route::get('/groups/{group_id}/students/create', CreateController::class)->name('admin.groups.students.create');
                Route::post('/groups/{group_id}/students', StoreController::class)->name('admin.groups.students.store');
                Route::delete('/groups/{group_id}/students/{student_id}', DestroyController::class)->name('admin.groups.students.destroy');
            });
        });
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

Route::namespace('App\Http\Controllers\Auth\User')->group(function () {
    Route::post('/login', LoginController::class)->name('login');
});

Route::namespace('App\Http\Controllers\Teacher\Group')->prefix('/teacher/{id}')->group(function () {
    Route::get('/groups', IndexController::class)->name('teacher.groups.index');

    Route::namespace('Lesson')->group(function () {
        Route::get('/groups/{group_id}/lessons', IndexController::class)->name('teacher.group.lessons.index');
        Route::get('/groups/{group_id}/lessons/create', CreateController::class)->name('teacher.group.lessons.create');
        Route::get('/groups/{group_id}/lessons/{lesson_id}/edit', EditController::class)->name('teacher.group.lessons.edit');
        Route::patch('/groups/{group_id}/lessons/{lesson_id}', UpdateController::class)->name('teacher.group.lessons.update');
        Route::delete('/groups/{group_id}/lessons/{lesson_id}', DestroyController::class)->name('teacher.group.lessons.destroy');
    });

});
Route::namespace('App\Http\Controllers\Parent')->group(function () {
    Route::get('/parent/{id}', ShowController::class)->name('parent.show');


});
