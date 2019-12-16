<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('apikey')->group(function() {
    Route::get('/test/one', "TestController@getOne");
    Route::post('/test/one', "TestController@setOne");
});

Route::get('/test/id', "TestController@byId");
Route::get('/test/text', "TestController@byText");

Route::get('/test', "TestController@test");
