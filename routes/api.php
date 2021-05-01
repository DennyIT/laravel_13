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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/position', 'PositionApiController@index');
Route::post('/position/create', 'PositionApiController@create');
Route::put('/position/edit/{id}', 'PositionApiController@edit');
Route::delete('/position/delete/{id}', 'PositionApiController@destroy');


