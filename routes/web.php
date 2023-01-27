<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\PaginationQBController;
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

Route::get('index',[CollectionController::class,'index']);
Route::controller(PaginationQBController::class)->group(function(){
    Route::get('/qb','ShowQBPagination');
    Route::get('/','ShowEloquentPagination');
});
