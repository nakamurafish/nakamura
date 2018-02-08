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

Route::get('/contact', 'ContactController@index');

//users
Route::get('/user', 'UserController@registration');
Route::post('/user', 'UserController@confirm');
Route::post('user/complete', 'UserController@complete');

//sales
//sales top画面
Route::get('/', 'SalesController@index');
//新規登録画面
Route::get('create', 'SalesController@create');
Route::post('create', 'SalesController@store');
Route::post('create/getIndex', 'SalesController@getIndex');
//編集画面
Route::get('edit/{id}', 'SalesController@edit');
Route::post('edit/{id}', 'SalesController@update');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//test
//Route::get('/test', 'TestController@registration');
//Route::post('/test', 'TestController@confirm');
//Route::post('test/complete', 'TestController@complete');

//test2
//Route::get('/test2', 'Test2Controller@registration');
//Route::post('/test2', 'Test2Controller@confirm');
//Route::post('test2/complete', 'Test2Controller@complete');