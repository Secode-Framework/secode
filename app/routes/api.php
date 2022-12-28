<?php

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

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'users'], function () {

        Route::post('/login', 'App\Http\Controllers\Admin\AuthController@login');
        Route::post('/registrar', 'App\Http\Controllers\Admin\AuthController@registrar')->middleware('secode');
        Route::get('/checkLogin', 'App\Http\Controllers\Admin\AuthController@checkLogin')->middleware('auth:sanctum');

    });
});
