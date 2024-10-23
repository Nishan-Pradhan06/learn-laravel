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
use App\Http\Controllers\ProfileController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
