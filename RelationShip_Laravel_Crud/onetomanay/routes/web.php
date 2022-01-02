<?php

use App\Http\Controllers\OneManyController;
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

Route::get('/add',[OneManyController::class,'create'])->name('many.create');
Route::get('/list',[OneManyController::class,'getData'])->name('many.list');
ROute::get('/update',[OneManyController::class,'update'])->name('many.update');
Route::get('/delete',[OneManyController::class,'delete'])->name('many.delete');
