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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('input', 'HelloController@index');

// Route::post('input', 'HelloController@index');


Route::get('confirm', 'HelloController@confirm');

Route::post('confirm', 'HelloController@confirm');


Route::get('input2', 'HelloController@index2');

Route::post('input2', 'HelloController@index2');


Route::get('confirm2', 'HelloController@confirm2');

Route::post('confirm2', 'HelloController@confirm2');

Route::get('test_input', 'TestController@index');


Route::get('db1_input', 'DatabaseController@input');

Route::post('db1_confirm', 'DatabaseController@confirm');


Route::get('insert','InsertController@input');

// Route::get('insert_result','InsertController@input2');

Route::post('insert_result','InsertController@insert');


Route::get('delete','DeleteController@screen_call');

Route::post('delete2','DeleteController@delete');