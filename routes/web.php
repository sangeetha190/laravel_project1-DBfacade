<?php

use App\Http\Controllers\StudentInsertController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [StudentInsertController::class, 'insert_form']);
Route::post('create', [StudentInsertController::class, 'insert']);
Route::get('view_students', [StudentInsertController::class, 'student_list']);
