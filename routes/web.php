<?php

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

//Dashboard
Route::get('/',[\App\Http\Controllers\user\DashboardController::class,'index'])->name('dashboard');
//About Us
Route::get('/about',[\App\Http\Controllers\user\AboutController::class,'index'])->name('about');
//Service
Route::get('/service',[\App\Http\Controllers\user\ServiceController::class,'index'])->name('service');
//Service Project
Route::get('/service-project',[\App\Http\Controllers\user\ServiceController::class,'indexServiceProject'])->name('service-project');
//Service Details
Route::get('/service-details/{id}',[\App\Http\Controllers\user\ServiceController::class,'indexServiceDetails'])->name('service-details');
//Contact Page
Route::get('/contact',[\App\Http\Controllers\user\ContactController::class,'index'])->name('contact');
