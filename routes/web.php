<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\CardJobModelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Proposal;

// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/services', function () {
//     return view('services');
// });
// Route::get('/nishan/{name}', function ($name) {
//     // echo $name;
//     return view('nishan', ['name' => $name]);
// });

// Route::get('/test', function () {
//     return view('newpage');
// });

// Route::get('user', [UserController::class, 'getUser']);
// Route::get('name/{name}', [UserController::class, 'getUserName']);
// Route::get('controller', [UserController::class, 'getController']);
// Route::get('users', [UserController::class, 'getPasword']);
// Route::get('admin', [UserController::class, 'adminLogin']);
// //path, contollername, function name
// Route::get('testing', [TestingController::class, 'myFunction']);

Route::get('/', [FrontendController::class, 'index']);
Route::get('/view', [FrontendController::class, 'viewStudent']);
Route::get('/about', [FrontendController::class, 'about']);

Route::get('/client/dashboard/', [AdminContoller::class, 'admin']);
Route::get('/all-jobs', [AdminContoller::class, 'allJobs']);

//freelancer
Route::get('/find-work', [CardJobModelController::class, 'show']);


Route::get('/proposal', [ProposalController::class, 'index']);
Route::post('/save-proposal', [ProposalController::class, 'store']);

Route::post('/save', [StudentController::class, 'store']);
Route::get('/delete/{id}', [StudentController::class, 'destroy']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update/{id}', [StudentController::class, 'update']);

//
Route::get('/post-work', [CardJobModelController::class, 'index']);
Route::post('/save-work', [CardJobModelController::class, 'store']);
// Route::get('/find-work', [CardJobModelController::class, 'show']);
Route::get('/edit-work/{id}', [CardJobModelController::class, 'edit']);
Route::post('/update-work/{id}', [CardJobModelController::class, 'update']);
Route::get('/delete/{id}', [CardJobModelController::class, 'destroy']);
