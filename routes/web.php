<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::post('/users',[UserController::class,'store']);

Route::get('/users/create',[UserController::class,'create']);
Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::delete('/users/{user}/delete',[UserController::class,'destroy']);
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::post('/users/{user}/update',[UserController::class,'update']);


