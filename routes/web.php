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
//     return view('home');
//     // return view('welcome');
// });

Route::get('/augusto', function () { return view('augusto'); });
Route::get('/lucia', function () { return view('lucia'); });
Route::get('/nosotros', function () { return view('nosotros'); });
Route::get('/', 'PostController@index');

Route::resource('post', 'PostController');
Route::resource('category', 'CategoryController');
Route::resource('media', 'PostTypeController');
