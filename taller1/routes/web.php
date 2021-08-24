<?php

use App\Http\Controllers\FraganceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");


Route::get('/create', [FraganceController::class, 'index'])->name("create.index");

Route::get('/list', [FraganceController::class, 'list'])->name("list.index");

Route::get('/individual/{id}', [FraganceController::class, 'show'])->name("list.show");

Route::delete('/individual/{id}', [FraganceController::class, 'delete'])->name("delete_fragance");

Route::post('/create', [FraganceController::class, 'add'])->name("add_fragance");