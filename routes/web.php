<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controller\Membercontroller;
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

Route::view('add','addmember');
Route::post('add',[Membercontroller::class,'addData']);
Route::get('list','App\Http\Controller\Membercontroller@list');
Route::get('delete/{id}',[Membercontroller::class,'delete']);
Route::get('edit/{id}',[Membercontroller::class,'showData']);
Route::post('edit',[Membercontroller::class,'update']);








?>