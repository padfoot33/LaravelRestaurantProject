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
Route::group(['middleware'=>'web'], function(){
    Route::get('/','App\Http\Controllers\restocontroller@index');
    Route::get('/list','App\Http\Controllers\restocontroller@list');
    Route::view('add','add');
    Route::post('add','App\Http\Controllers\restocontroller@add');
    Route::get('/delete/{id}','App\Http\Controllers\restocontroller@delete');
    Route::get('/edit/{id}','App\Http\Controllers\restocontroller@edit');
    Route::post('edit','App\Http\Controllers\restocontroller@update');
    Route::view('register','register');
    Route::post('register','App\Http\Controllers\restocontroller@register');
    Route::view('login','login');
    Route::post('login','App\Http\Controllers\restocontroller@login');
    Route::get('logout','App\Http\Controllers\restocontroller@logout');
});

