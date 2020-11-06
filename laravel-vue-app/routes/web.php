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

// use Illuminate\Routing\Route;
use vendor\laravel\framework\src\Illuminate\Routing;

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


// ORM person
Route::get('person', 'PersonController@human');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
// 新規作成ルーティング
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

// ORM board
Route::get('board', 'BoardController@human');
// 新規作成ルーティング
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

// CRUD関係のアクセスをまとめて登録
Route::resource('rest', 'RestappController');

Route::get('human/rest', 'HumanController@rest');