<?php

use App\Http\Controllers\LogicController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('logic',[LogicController::class,"dont_give_me_five"]);
Route::get('logic-str',[LogicController::class,"stringToIndex"]);
Route::apiResource('users',UserController::class)->except(['store']);

Route::post('register',[UserController::class,"store"]);
Route::post('login',[UserController::class,"login"]);