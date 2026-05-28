<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Redirect the blank home page straight to the Student module
Route::get('/', function () {
    return redirect()->route('students.index');
});

// This automatically handles Create, Read, Update, and Delete!
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
