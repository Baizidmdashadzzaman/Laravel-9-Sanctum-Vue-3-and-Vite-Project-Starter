<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//public routes start
        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
//public routes end

//protected routes start

    //[admin routes start]
        Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
            return $request->user();
        });
    //[admin routes end]
    
    //[setting routes start]
        Route::post('/setting-update', [SettingController::class, 'store'])->name('setting.update')->middleware('auth:sanctum');
        Route::get('/getsmsbalace', [SettingController::class, 'getsmsbalace'])->name('setting.getsmsbalace');
    //[setting routes end]

    //[category routes start]
        Route::get('/category-list', [CategoryController::class, 'index'])->name('category.list')->middleware('auth:sanctum');
        Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create')->middleware('auth:sanctum');
        Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store')->middleware('auth:sanctum');
        Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth:sanctum');
        Route::get('/category-show/{id}', [CategoryController::class, 'show'])->name('category.show')->middleware('auth:sanctum');
        Route::post('/category-update', [CategoryController::class, 'update'])->name('category.update')->middleware('auth:sanctum');
        Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth:sanctum');
        Route::post('/category-search', [CategoryController::class, 'search'])->name('category.search')->middleware('auth:sanctum'); 
        Route::get('/category-list-all', [CategoryController::class, 'index_all'])->name('category.list.all')->middleware('auth:sanctum');
    //[category routes end]

//protected routes end