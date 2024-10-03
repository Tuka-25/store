<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::get('users', [UserController::class, 'index']); 
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']); 
Route::put('users/{id}', [UserController::class, 'update']); 
Route::delete('users/{id}', [UserController::class, 'destroy']); 


Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::put('products/{id}', [ProductController::class, 'update']); 
Route::delete('products/{id}', [ProductController::class, 'destroy']); 


Route::get('categories', [CategoryController::class, 'index']); 
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::post('categories', [CategoryController::class, 'store']); 
Route::put('categories/{id}', [CategoryController::class, 'update']); 
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);


Route::get('tags', [TagController::class, 'index']); 
Route::get('tags/{id}', [TagController::class, 'show']); 
Route::post('tags', [TagController::class, 'store']); 
Route::put('tags/{id}', [TagController::class, 'update']); 
Route::delete('tags/{id}', [TagController::class, 'destroy']); 

