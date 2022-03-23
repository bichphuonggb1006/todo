<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
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
Route::get('/', [HomeControllers::class, 'index'])->name('index');
Route::get('/search', [HomeControllers::class, 'getSearch'])->name('getSearch');
Route::get('/add', [HomeControllers::class, 'add'])->name('add');
Route::get('/postAdd', [HomeControllers::class, 'postAdd'])->name('postAdd');
Route::post('/postAdd', [HomeControllers::class, 'postAdd'])->name('postAdd');
Route::get('/update', [HomeControllers::class, 'update'])->name('update');
Route::get('/postUpdate', [HomeControllers::class, 'postUpdate'])->name('postUpdate');
