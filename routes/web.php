<?php

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
//two ways to use controller
use App\Http\Controllers\MyFirstController;
//Route::get('/hello','App\Http\Controllers\MyFirstController@OMG');
Route::get('/hello',[MyFirstController::class,'OMG']);

//check two function in one controller(one, two)
use App\Http\Controllers\ExampleController;
Route::get('/first',[ExampleController::class,'two']);

//training with migration
Route::get('/table',[ExampleController::class,'table']);

//create
Route::get('/table/new',[ExampleController::class,'create']);

//update
Route::get('/table/update',[ExampleController::class,'update']);
