<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');

    Route::get('member/add','MemberController@add');
    Route::post('member/addok','MemberController@addok');

    Route::get('member/index','MemberController@index');

    Route::get('member/update/{id?}','MemberController@update');
    Route::post('member/updateok','MemberController@updateok');

    Route::get('member/del/{id?}','MemberController@del');
});
Route::get('demo/register','DemoController@register');
Route::get('demo/registerok','DemoController@registerok');
Route::get('demo','DemoController@demo');
