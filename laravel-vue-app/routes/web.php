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

Route::get('human', 'HumanController@human');

// POSTルートの設定
Route::post('human', 'HumanController@post');

Route::get('human/add', 'HumanController@add');
Route::post('human/add', 'HumanController@create');

Route::get('human/edit', 'HumanController@edit');
Route::post('human/edit', 'HumanController@update');

Route::get('human/del', 'HumanController@del');
Route::post('human/del', 'HumanController@remove');

Route::get('human/show', 'HumanController@show');


// ORM
Route::get('person', 'PersonController@human');