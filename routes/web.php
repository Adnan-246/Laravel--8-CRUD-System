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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', 'App\Http\Controllers\CrudController@showData');
Route::get('/add-data', 'App\Http\Controllers\CrudController@addData');
Route::post('/store-data', 'App\Http\Controllers\CrudController@storeData');
Route::get('/edit-data/{id}', 'App\Http\Controllers\CrudController@editData');
Route::post('/update-data/{id}', 'App\Http\Controllers\CrudController@updateData');
Route::get('/delete-data/{id}', 'App\Http\Controllers\CrudController@deleteData');
