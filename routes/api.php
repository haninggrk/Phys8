<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Fis8CategoryController;
use App\Http\Controllers\Api\Fis8LevelController;
use App\Http\Controllers\Api\Fis8MyUserController;
use App\Http\Controllers\Api\Fis8QuestionController;
use App\Http\Controllers\Api\Fis8QuizHistoryController;
use App\Http\Controllers\Api\Fis8UserAnswerController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Fis8UserHistoryController;

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
Route::post('add_reward', [Fis8QuizHistoryController::class, 'addReward']);

Route::apiResource('myuser', UserController::class);
Route::apiResource('level', Fis8LevelController::class);
Route::apiResource('quiz_history', Fis8QuizHistoryController::class);
Route::get('quiz_history_all', [Fis8QuizHistoryController::class, 'index']);
Route::apiResource('user_history', Fis8UserHistoryController::class);
Route::apiResource('user_answer', Fis8UserAnswerController::class);
Route::apiResource('question', Fis8QuestionController::class);
Route::get('rank', [Fis8MyUserController::class, 'rank']);
Route::apiResource('category', Fis8CategoryController::class);
Route::post('logout', [LoginController::class, 'logout']);
Route::group(['middleware' => 'auth:api'], function () {
 
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function () {
});
