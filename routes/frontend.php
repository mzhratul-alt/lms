<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/courses/{id}', 'courseShow')->name('courseShow');
    Route::post('/courses-enrollment/{id}', 'courseEnrollment')->name('courseEnrollment');
    Route::get('/teachers', 'teachers')->name('teachers');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
});
