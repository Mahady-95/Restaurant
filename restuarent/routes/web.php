<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[RestaController::class,'index']);
Route::get('list',[RestaController::class,'list']);
Route::view('add','add');
Route::post('add',[RestaController::class,'add']);
Route::get('delete/{id}',[RestaController::class,'delete']);
Route::get('edit/{id}',[RestaController::class,'edit']);
Route::post('edit/{id}',[RestaController::class,'update']);




