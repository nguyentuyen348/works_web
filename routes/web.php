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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::prefix('page')->group(function (){
    Route::get('login',[\App\Http\Controllers\LoginController::class,'showLogin'])->name('page.showLogin');
    Route::post('login',[\App\Http\Controllers\LoginController::class,'login']);

    Route::get('register',[\App\Http\Controllers\RegisterController::class,'showRegister'])->name('page.showRegister');
    Route::post('register',[\App\Http\Controllers\RegisterController::class,'register']);
    Route::get('home',[\App\Http\Controllers\HomeController::class,'index'])->name('page.home');

});

Route::prefix('admin')->group(function (){
    Route::prefix('categories')->group(function (){
        Route::get('index',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');

        Route::get('create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories.create');
        Route::post('create',[\App\Http\Controllers\CategoryController::class,'store']);

        Route::get('edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categories.edit');
        Route::post('edit/{id}',[\App\Http\Controllers\CategoryController::class,'update']);

        Route::get('{id}/destroy',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.destroy');

        Route::get('search',[\App\Http\Controllers\CategoryController::class,'search'])->name('categories.search');
    });

    Route::prefix('companies')->group(function (){
        Route::get('index',[\App\Http\Controllers\CompanyController::class,'index'])->name('companies.index');
        Route::get('detail/{id}',[\App\Http\Controllers\CompanyController::class,'show'])->name('companies.detail');
        Route::get('create',[\App\Http\Controllers\CompanyController::class,'create'])->name('companies.create');
        Route::post('create',[\App\Http\Controllers\CompanyController::class,'store']);

        Route::get('edit/{id}',[\App\Http\Controllers\CompanyController::class,'edit'])->name('companies.edit');
        Route::post('edit/{id}',[\App\Http\Controllers\CompanyController::class,'update']);

        Route::get('{id}/destroy',[\App\Http\Controllers\CompanyController::class,'destroy'])->name('companies.destroy');
    });
    Route::prefix('jobs')->group(function (){
        Route::get('index',[\App\Http\Controllers\JobController::class,'index'])->name('jobs.index');
        Route::get('create',[\App\Http\Controllers\JobController::class,'create'])->name('jobs.create');
        Route::post('create',[\App\Http\Controllers\JobController::class,'store']);
        Route::get('detail/{id}',[\App\Http\Controllers\JobController::class,'detail'])->name('jobs.detail');

    });



});
