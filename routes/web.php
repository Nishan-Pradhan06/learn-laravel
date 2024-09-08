<?php

use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/nishan/{name}', function ($name) {
    // echo $name;
    return view('nishan', ['name' => $name]);
});

Route::get('/test', function () {
    return view('newpage');
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('name/{name}', [UserController::class, 'getUserName']);
Route::get('controller', [UserController::class, 'getController']);
Route::get('users', [UserController::class, 'getPasword']);
Route::get('admin', [UserController::class, 'adminLogin']);
//path, contollername, function name
Route::get('testing', [TestingController::class, 'myFunction']);
