<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Fis8CategoryController;
use App\Http\Controllers\Api\Fis8LevelController;
use App\Http\Controllers\Api\Fis8QuestionController;
use App\Http\Controllers\Api\Fis8QuizHistoryController;
use App\Http\Controllers\Api\Fis8UserAnswerController;
use App\Http\Controllers\Api\UserController;
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
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);

Route::apiResource('myuser', UserController::class);
Route::apiResource('level', Fis8LevelController::class);
Route::apiResource('quiz_history', Fis8QuizHistoryController::class);
Route::apiResource('user_answer', Fis8UserAnswerController::class);
Route::apiResource('question', Fis8QuestionController::class);

Route::apiResource('category', Fis8CategoryController::class);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
