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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// 追加
Route::group(['middleware'=>'api'],function(){
    Route::post('posts','App\Http\Controllers\Api\ScheduleController@scheduleindex');
    Route::post('posts/create','App\Http\Controllers\Api\ScheduleController@create'); //追加
    Route::post('edit','App\Http\Controllers\Api\ScheduleController@edit');  //追記
    Route::post('update','App\Http\Controllers\Api\ScheduleController@update');  //追記
    Route::post('delete','App\Http\Controllers\Api\ScheduleController@delete'); //追記
});
