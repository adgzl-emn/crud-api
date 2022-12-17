<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/{i?}',[CrudController::class,'index'])->name('index');


Route::get('single/user/{id}',[CrudController::class,'singleuser'])->name('single.user');

Route::get('add/user',[CrudController::class,'showadd'])->name('show.user');
Route::post('add/user',[CrudController::class,'adduser'])->name('add.user');

Route::get('user/update/{id}',[CrudController::class,'updateshow'])->name('user.update');
Route::post('user/update/{id}',[CrudController::class,'update'])->name('user.update.post');

Route::get('user/delete/{id}',[CrudController::class,'delete'])->name('user.delete');
