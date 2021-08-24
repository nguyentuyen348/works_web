<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backends.layouts.master');
})->name('home');

Route::prefix('page')->group(function (){
    Route::get('login',[\App\Http\Controllers\LoginController::class,'showLogin'])->name('page.showLogin');
    Route::post('login',[\App\Http\Controllers\LoginController::class,'login']);

    Route::get('register',[\App\Http\Controllers\RegisterController::class,'showRegister'])->name('page.showRegister');
    Route::post('register',[\App\Http\Controllers\RegisterController::class,'register']);

});

Route::prefix('admin')->group(function (){
    Route::prefix('categories')->group(function (){
        Route::get('index',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');

        Route::get('create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories.create');
        Route::post('create',[\App\Http\Controllers\CategoryController::class,'store']);

        Route::get('edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categories.edit');
        Route::post('edit/{id}',[\App\Http\Controllers\CategoryController::class,'update']);

        Route::get('destroy/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.destroy');
    });

    Route::prefix('jobs')->group(function (){
        Route::get('create',[\App\Http\Controllers\JobController::class,'create'])->name('jobs.create');
    });



});
