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
//新規追加画面
Route::get('/registration', 'SalesController@registration');
Route::post('/registration', 'SalesController@confirm');
//編集画面
Route::get('/update', 'SalesController@update');
Route::post('/update', 'SalesController@confirm');

//sales top画面に戻る
Route::post('/', 'SalesController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//test
Route::get('/test', 'TestController@registration');
Route::post('/test', 'TestController@confirm');
Route::post('test/complete', 'TestController@complete');

//test2
Route::get('/test2', 'Test2Controller@registration');
Route::post('/test2', 'Test2Controller@confirm');
Route::post('test2/complete', 'Test2Controller@complete');