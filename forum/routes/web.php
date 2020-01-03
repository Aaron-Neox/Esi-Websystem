<?php

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

Route::group(['prefix' => 'ajax'] , function(){
    // all the roots that don't need to go to react rooter
});

Route::get('/{path?}' , function(){
    return view('web');
});
Route::resource('/students','StudentController');
Route::resource('/teachers','TeacherController');
