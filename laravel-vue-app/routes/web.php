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

use App\Http\Middleware\HumanMiddleware;
Route::get('human', 'HumanController@human')->middleware(HumanMiddleware::class);

// POSTルートの設定
Route::post('human', 'HumanController@post');