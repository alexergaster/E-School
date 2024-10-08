<?php

use App\Http\Controllers\Auth\User\ParentLogoutController;
use App\Http\Controllers\Auth\User\TeacherLogoutController;
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
            Route::group(['namespace' => 'Feature'], function () {
                Route::get('/programs/{id}/features', IndexController::class)->name('admin.features.index');
                Route::get('/programs/{id}/features/create', CreateController::class)->name('admin.features.create');
                Route::post('/programs/{id}/features', StoreController::class)->name('admin.features.store');
                Route::delete('/programs/{id}/features/{feature}', DestroyController::class)->name('admin.features.destroy');
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
            Route::group(['namespace' => 'Journal'], function () {
                Route::get('/groups/{id}/journal', IndexController::class)->name('admin.groups.journal.index');
                Route::get('/groups/{id}/journal/{lesson}', ShowController::class)->name('admin.groups.journal.show');
                Route::delete('/groups/{id}/journal/{lesson}', DestroyController::class)->name('admin.groups.journal.destroy');

                Route::group(['namespace' => 'Workingout'], function () {
                    Route::get('/groups/{id}/journal/{lesson}/workingout/create', CreateController::class)->name('admin.group.journal.workingout.create');
                    Route::post('/groups/{id}/journal/{lesson}/workingout', StoreController::class)->name('admin.group.journal.workingout.store');
                });
            });
        });
        Route::group(['namespace' => 'Workingout'], function () {
            Route::get('/workingout', IndexController::class)->name('admin.workingout.index');
            Route::get('/workingout/create', CreateController::class)->name('admin.workingout.create');
            Route::post('/workingout', StoreController::class)->name('admin.workingout.store');
            Route::delete('/workingout/{id}', DestroyController::class)->name('admin.workingout.destroy');

        });
        Route::group(['namespace' => 'Gallery'], function () {
            Route::get('/gallery', IndexController::class)->name('admin.gallery.index');
            Route::get('/gallery/create', CreateController::class)->name('admin.gallery.create');
            Route::post('/gallery', StoreController::class)->name('admin.gallery.store');
            Route::delete('/gallery/{id}', DestroyController::class)->name('admin.gallery.destroy');

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

Route::namespace('App\Http\Controllers\Auth\User')->group(function () {
    Route::post('/login', LoginController::class)->name('login');
});

Route::get('/teacher/logout', TeacherLogoutController::class)->name('teacher.logout');
Route::get('/parent/logout', ParentLogoutController::class)->name('parent.logout');

Route::middleware('teacher')->namespace('App\Http\Controllers\Teacher')->prefix('/teacher/{id}')->group(function () {
    Route::namespace('Group')->group(function () {
        Route::get('/groups', IndexController::class)->name('teacher.groups.index');

        Route::namespace('Lesson')->group(function () {
            Route::get('/groups/{group_id}/lessons', IndexController::class)->name('teacher.group.lessons.index');
            Route::get('/groups/{group_id}/lessons/create', CreateController::class)->name('teacher.group.lessons.create');
            Route::get('/groups/{group_id}/lessons/{lesson_id}/edit', EditController::class)->name('teacher.group.lessons.edit');
            Route::patch('/groups/{group_id}/lessons/{lesson_id}', UpdateController::class)->name('teacher.group.lessons.update');
        });
    });

    Route::namespace('Workingout')->group(function () {
        Route::get('/workingout', IndexController::class)->name('teacher.workingout.index');
        Route::get('/workingout/{workingout}/edit', EditController::class)->name('teacher.workingout.edit');
    });
});
Route::namespace('App\Http\Controllers\Parent')->middleware('parent')->group(function () {
    Route::get('/parent/{id}', ShowController::class)->name('parent.show');
    Route::namespace('Review')->group(function () {
        Route::patch('/parent/{id}/review/update', UpdateController::class)->name('parent.review.update');
    });


});


