<?php

use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\UpdateController;
use App\Http\Controllers\Person\DeleteController;
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

Route::group(['prefix'=>'people'],function(){
    Route::post('/', StoreController::class);
    Route::get('/', IndexController::class);
    Route::patch('/{person}', UpdateController::class);
    Route::delete('/{person}', DeleteController::class);
});


