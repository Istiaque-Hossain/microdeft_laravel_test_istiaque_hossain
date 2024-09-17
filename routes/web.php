<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'create'])->name('student');
