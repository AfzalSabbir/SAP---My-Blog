<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
	Route::middleware('auth:api')->get('/user', function (Request $request) {
	    return $request->user();
	});
	// Route::get('/edit/{id}', 'TaskController@edit');
	// Route::get('/add', 'TaskController@add');

Route::middleware('cors')->group(['prefix' => '/post'], function () {
	Route::get('/', 'PostController@index');
	Route::post('/', 'PostController@store');
	Route::get('/{id}', 'PostController@show');
	Route::put('/{id}', 'PostController@update');
	Route::delete('/{id}', 'PostController@delete');
});
*/


Route::group(['prefix' => '/post'], function () {
	Route::get('/', 'PostController@index');
	Route::post('/', 'PostController@store');
	Route::get('/{id}', 'PostController@show');
	Route::put('/{id}', 'PostController@update');
	Route::delete('/{id}', 'PostController@delete');
});