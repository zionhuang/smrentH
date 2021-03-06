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

Route::post('/rent', 'PostController@create');//post方法不能测试的原因是 csrf，可以去/Http/VerifyCsrfToken 把当前路由从csrf中排除掉

Route::get('/house', 'PostController@houseIndex');

Route::get('/post', 'PostController@post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fixUserInfo', 'UserController@fixUserInfo')->name('fix');


Route::post('/change', 'UserController@change')->name('change');


Route::get('/test', 'UserController@test');

//Route::post('/test', 'UserController@test');