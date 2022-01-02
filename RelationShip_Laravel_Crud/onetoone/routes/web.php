<?php

use App\Http\Controllers\RelationShipController;
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

// Route::get('/insert',function(){

//     $user = Use

// });
Route::get('/add',[RelationShipController::class,'insert'])->name('one.add');
Route::get('/update',[RelationShipController::class,'update'])->name('one.update');
Route::get('/list',[RelationShipController::class,'getData'])->name('one.list');
Route::get('/delete',[RelationShipController::class,'delete'])->name('one.delete');