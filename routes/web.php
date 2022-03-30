<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\TaskController;
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
Route::get('/', [TaskController::class, 'index'])->name('index');
Route::get('/search', [TaskController::class, 'getSearch'])->name('getSearch');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::get('/store', [TaskController::class, 'store'])->name('store');
Route::post('/store', [TaskController::class, 'store'])->name('store');
Route::get('/edit', [TaskController::class, 'edit'])->name('edit');
Route::post('/update', [TaskController::class, 'update'])->name('update');
