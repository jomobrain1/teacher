<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\
{PostController,CategoryController

};


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


Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
    Route::get('categories', [\App\Http\Controllers\Api\CategoryController::class, 'index']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});