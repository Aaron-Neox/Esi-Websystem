<?php

use Illuminate\Http\Request;

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
Route::post('/etudiant/add','StudentController@store');
Route::post('/etudiant/destroy','StudentController@destroy');
Route::get('/etudiant/list','StudentController@list');
Route::post('/teacher/add','TeacherController@store');
Route::post('/teacher/destroy','TeacherController@destroy');
Route::get('/teacher/list','TeacherController@list');
Route::post('/admin/login','AdminController@login');


