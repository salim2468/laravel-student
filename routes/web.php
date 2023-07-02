<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/students',StudentController::class);

Route::get('/grades/{student_id}',[GradeController::class,'index'])->name('grades.index');
Route::post('/grades/{student_id}',[GradeController::class,'storeGrade'])->name('grades.store');
Route::get('/grades/edit/{grade_id}',[GradeController::class,'edit'])->name('grades.edit');
Route::put('/grades/{grade_id}',[GradeController::class,'update'])->name('grades.update');
