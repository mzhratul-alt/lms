<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Backend\EnrollmentController;
use App\Http\Controllers\Backend\ResultController;

//Guest Route Group
Route::middleware(['guest'])->group(function () {
    // Admin Auth Route
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
        Route::get('/forgot-password', 'forgot_password')->name('forgot_password');
    });
});

//Authenticated Admin Route
Route::middleware(['admin:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //Teacher Controller
    Route::prefix('teacher')->controller(TeacherController::class)->name('teacher.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
    });
    //Course Controller
    Route::prefix('course')->controller(CourseController::class)->name('course.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
    });
    //Student Controller
    Route::prefix('student')->controller(StudentController::class)->name('student.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
    });
    //Enrollment Controller
    Route::prefix('enrollment')->controller(EnrollmentController::class)->name('enrollment.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/change-approval', 'changeApproval')->name('changeApproval');
    });
    //Result Controller
    Route::prefix('result')->controller(ResultController::class)->name('result.')->group(function () {
        Route::get('/create/{id}', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
});
