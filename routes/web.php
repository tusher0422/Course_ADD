<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');


Route::view('/student', 'frontend.master')->name('frontend.master');
;

