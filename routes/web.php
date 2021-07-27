<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('shop.master');
//});
Route::prefix('admin')->group(function (){
    Route::get('/',[LoginController::class,'index'])->name('admin.formlogin');
    Route::post('/',[LoginController::class,'login'])->name('admin.login');
    Route::middleware('checkLogin')->group(function (){
        Route::prefix('food')->group(function (){
            Route::get('/',[FoodController::class,'index'])->name('food.list');
            Route::get('/create', [FoodController::class,'create'])->name('food.create');
            Route::post('/create',[FoodController::class,'store'])->name('food.store');
            Route::get('/update/{id}',[FoodController::class,'edit'])->name('food.edit');
            Route::post('/update{id}',[FoodController::class,'update'])->name('food.update');
            Route::get('/delete/{id}',[FoodController::class,'destroy'])->name('food.delete');
        });
        Route::prefix('category')->group(function (){
            Route::get('/',[CategoryController::class,'index'])->name('category.list');
            Route::get('/add',[CategoryController::class,'create'])->name('category.create');
            Route::post('/create',[CategoryController::class,'store'])->name('category.store');
            Route::get('/update/{id}',[CategoryController::class,'edit'])->name('category.edit');
            Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
            Route::get('/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

        });
        Route::prefix('/user')->group(function (){
            Route::get('/',[UserController::class,'index'])->name('user.list');
            Route::get('/create',[UserController::class,'create'])->name('user.create');
            Route::post('/create',[UserController::class,'store'])->name('user.store');
        });
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    });
});


