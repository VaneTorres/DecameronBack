<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hoteles', 'App\Http\Controllers\Hoteles@index');
Route::get('/hoteles/{id}', 'App\Http\Controllers\Hoteles@show');
Route::post('/hoteles', 'App\Http\Controllers\Hoteles@store');
Route::put('/hoteles/{id}', 'App\Http\Controllers\Hoteles@update');
Route::delete('/hoteles/{id}', 'App\Http\Controllers\Hoteles@destroy');
Route::get('ciudades', 'App\Http\Controllers\Parametricas@ciudades');
Route::get('acomodaciones/{id}', 'App\Http\Controllers\Parametricas@acomodaciones');
Route::get('tipo_habitaciones', 'App\Http\Controllers\Parametricas@tipo_habitaciones');
