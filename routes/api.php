<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Fis8CategoryController;
use App\Http\Controllers\Api\Fis8HistoryController;
use App\Http\Controllers\Api\Fis8ImageController;
use App\Http\Controllers\Api\Fis8LevelController;
use App\Http\Controllers\Api\Fis8QuestionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Fis8AnswerOptionTextController;
use App\Http\Controllers\Api\Fis8CodeController;

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
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);

Route::apiResource('myuser', UserController::class);
Route::apiResource('level', Fis8LevelController::class);
Route::apiResource('history', Fis8HistoryController::class);
Route::apiResource('question', Fis8QuestionController::class);
Route::apiResource('image', Fis8ImageController::class);

Route::apiResource('code', Fis8CodeController::class);

Route::apiResource('answer_option_text', Fis8AnswerOptionTextController::class);

Route::apiResource('category', Fis8CategoryController::class);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
