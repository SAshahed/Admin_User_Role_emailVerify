<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;






Route::get('/', [HomeController::class, 'home']);
// Auth 
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'auth_login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create_user']);
Route::get('varify/{token}', [AuthController::class, 'varify']);

Route::get('forgot-password', [AuthController::class, 'forgotPassword']);




Route::group(['middleware'=>'admin'], function(){
Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);

//User
Route::get('panel/user/list', [UserController::class, 'user']);
Route::get('panel/user/add', [UserController::class, 'add_user']);
Route::post('panel/user/add', [UserController::class, 'insert_user']);
Route::get('panel/user/edit/{id}', [UserController::class, 'edit_user']);
Route::post('panel/user/edit/{id}', [UserController::class, 'update_user']);
Route::get('panel/user/delete/{id}', [UserController::class, 'delete_user']);

// Category
Route::get('panel/category/list', [CategoryController::class, 'category']);
Route::get('panel/category/add', [CategoryController::class, 'add_category']);
Route::post('panel/category/add', [CategoryController::class, 'insert_category']);
Route::get('panel/category/edit/{id}', [CategoryController::class, 'edit_category']);
Route::post('panel/category/edit/{id}', [CategoryController::class, 'update_category']);
Route::get('panel/category/delete/{id}', [CategoryController::class, 'delete_category']);
});

