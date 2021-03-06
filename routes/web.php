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

Route::get('/', function () {
    return view('welcome');
});


Route::get('students','StudentController@show');

//Route::get('studentdetails','StudentController@studentsdetails');

//Route::get('studentsdetails','StudentController@edit');

/*Route::get('students/{id}', function ($id) {
    return 'Student'.$id;
});*/

Route::get('students/{id}', 'StudentController@edit');

Route::post('studentsdetails','StudentController@update');
  
