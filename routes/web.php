<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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
    return view('form');
});
Route::post('insert/',[formController::class,'insert']);
Route::get('viewdata/',[formController::class,'show']);
Route::post('update/',[formController::class,'updatedata']);
Route::get('update/{id}',[formController::class,'updateform']);
Route::get('delete/{id}',[formController::class,'deletedata']);
