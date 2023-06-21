<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert','App\Http\Controllers\StudInsertController@insertform');
Route::post('/create','App\Http\Controllers\StudInsertController@insert');
Route::get('/view-records','App\Http\Controllers\StudViewController@index');