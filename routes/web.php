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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/foo', function () {
//     return 'hello word';
// });

// Route::get('foo', function () {
//     return view('foo');
// });
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/test', 'HomeController@test');

Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/create', 'ArchiveController@create');
Route::post('/archive/store', 'ArchiveController@store');
Route::get('/archive/edit{id}', 'ArchiveController@edit');
Route::put('/archive/update', 'ArchiveController@update');
Route::get('/archive/delete{id}', 'ArchiveController@destroy');

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/create', 'InventoryController@create');
Route::post('/inventory/store', 'InventoryController@store');
Route::get('/inventory/edit{id}', 'InventoryController@edit');
Route::put('/inventory/update', 'InventoryController@update');
Route::get('/inventory/delete{id}', 'InventoryController@destroy');


Route::get('/position', 'PositionController@index');
Route::get('/position/create', 'PositionController@create');
Route::post('/position/store', 'PositionController@store');
Route::get('/position/edit{id}', 'PositionController@edit');
Route::put('/position/update', 'PositionController@update');
Route::get('/position/delete{id}', 'PositionController@destroy');


Route::get('api/department', 'DepartmentApiController@index');
Route::get('api/department/create', 'DepartmentApiController@create');
Route::post('api/department/store', 'DepartmentApiController@store');
Route::get('api/department/edit/{id}', 'DepartmentApiController@edit');
Route::put('api/department/update', 'DepartmentApiController@update');
Route::get('api/department/delete/{id}', 'DepartmentApiController@destroy');
Route::get('api/department/show/{id}', 'DepartmentApiController@show');


Route::get('/department', 'DepartmentController@index');
Route::get('/department/create', 'DepartmentController@create');
Route::post('/department/store', 'DepartmentController@store');
Route::get('/department/edit{id}', 'DepartmentController@edit');
Route::put('/department/update', 'DepartmentController@update');
Route::get('/department/delete{id}', 'DepartmentController@destroy');
Route::get('/department/show{id}', 'DepartmentController@show');



Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/edit{id}', 'EmployeeController@edit');
Route::put('/employee/update', 'EmployeeController@update');
Route::get('/employee/delete{id}', 'EmployeeController@destroy');




// Route::get('/home', 'HomeController@index')->name('home');
