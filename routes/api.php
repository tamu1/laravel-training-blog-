<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\DummyAPI;
use App\Http\controllers\DevicesController;
use App\Http\controllers\Device1Controller;

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

Route::get("data",[DummyAPI::class,"getData"]);

Route::get("listss/{id?}",[DevicesController::class,"list"]);

Route::post("add",[Device1Controller::class,'add']);


