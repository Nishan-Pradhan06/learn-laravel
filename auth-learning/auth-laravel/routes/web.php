<?php

use App\Http\Controllers\authPage;
use Illuminate\Support\Facades\Route;

Route::get('/',[authPage::class,'index']);
Route::get('/signup',[authPage::class,'signUp']);



Route::get('/client-das',[authPage::class,'signUp']);
Route::get('/freelancer-das',[authPage::class,'signUp']);
Route::get('/admin-das',[authPage::class,'signUp']);
Route::get('/profile',[authPage::class,'signUp']);