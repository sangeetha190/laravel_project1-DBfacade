<?php

use App\Facade\Greet;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\StudentInsertController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


//======================   DBFacade CRUD Starts   ===================

Route::get('/', [StudentInsertController::class, 'insert_form']);
// create data
Route::post('create', [StudentInsertController::class, 'insert']);
// view data
Route::get('view_students', [StudentInsertController::class, 'student_list']);
// edit data
Route::get('edit/{id}', [StudentInsertController::class, 'edit']);

//update the edited data
Route::post('edit/{id}', [StudentInsertController::class, 'update']);

//delete the  data using id
Route::get('delete/{id}', [StudentInsertController::class, "delete"]);
//delete all the data in the table
Route::get('delete_all', [StudentInsertController::class, 'delete_all']);

//======================  DBFacade CRUD Ends  ===================

// ---------------------------------------------------------------------------------------------------------

//======================  Normal  CRUD (Eloquent) Starts  ===================
Route::get('/normal/create', [UserController::class, 'create']);
// create the data
Route::post('/normal/store', [UserController::class, 'store']);
// list the data
Route::get('/normal/list', [UserController::class, 'list']);
//edit the data using id
Route::get('/normal/edit/{id}', [UserController::class, 'edit']);
//edit  and update the data using id
Route::post('/normal/update/{id}', [UserController::class, 'update']);
//delete the data using id
Route::get('/normal/delete/{id}', [UserController::class, 'delete']);
//======================  Normal  CRUD  (Eloquent) Ends  ===================

// ---------------------------------------------------------------------------------------------------------
//Custom configuration route
Route::get('google', function () {
    $google_api_token = config('google.google_api_Key');
    return 'API is ' . $google_api_token;
});

// Create Facade route
// Route::get('/', function () {
//     return Greet::welcomefunction();
// });


Route::get('/upload_image', [ImageUploadController::class, 'imageUploadForm']);
Route::post('/upload_image', [ImageUploadController::class, 'imageUpload'])->name('upload.image');


// Insert the id and display it
Route::get('/insert_id', [StudentInsertController::class, 'userForm']);
Route::post('/insert_id', [StudentInsertController::class, 'createUserId'])->name('insert_id');



//Delete the public and stroage files
// upload the image
Route::get('/', function () {
    return view('welcome');
});
Route::get('/deletefile/public', [HomeController::class, 'deleteFromPublic']);
Route::get('/deletefile/storage', [HomeController::class, 'deleteFromStorage']);

// Pagination
Route::get('/pagination/list', [HomeController::class, 'paginationList']);
