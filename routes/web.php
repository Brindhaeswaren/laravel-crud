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

Route::controller(App\Http\Controllers\StudInsertController::class)->group(function(){
    Route::get('insert','insertform')->name('studdetails');
    Route::get('create','insert');
    Route::get('view-records','index')->name('viewdetails');

});

Route::controller(App\Http\Controllers\StudViewController::class)->group(function(){
    Route::get('view-records','index')->name('viewdetails');

});
//Route::get('/insert','App\Http\Controllers\StudInsertController@insertform');
//Route::post('/create','App\Http\Controllers\StudInsertController@insert');
//Route::get('/view-records','App\Http\Controllers\StudViewController@index');

Route::controller(App\Http\Controllers\SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});