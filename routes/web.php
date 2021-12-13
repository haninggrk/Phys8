<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fis8CategoryController;
use App\Http\Controllers\Fis8CodeController;
use App\Http\Controllers\Fis8LevelController;
use App\Http\Controllers\Fis8QuestionController;
use App\Http\Controllers\Fis8ImageController;
use App\Http\Controllers\Fis8AnswerOptionTextController;
use App\Http\Controllers\Fis8QuestionAnswerTextController;
use App\Http\Controllers\Fis8QuestionAnswerImageController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('cats', Fis8CategoryController::class);
Route::get('/category', [Fis8CategoryController::class, 'index']);

Route::resource('codes', Fis8CodeController::class);
Route::get('/code', [Fis8CodeController::class, 'index']);

Route::resource('levels', Fis8LevelController::class);
Route::get('/level', [Fis8LevelController::class, 'index']);

Route::resource('questions', Fis8QuestionController::class);
Route::get('/question', [Fis8QuestionController::class, 'index']);

Route::resource('images', Fis8ImageController::class);
Route::get('/image', [Fis8ImageController::class, 'index']);

Route::resource('opttxts', Fis8AnswerOptionTextController::class);
Route::get('/answer-option-text', [Fis8AnswerOptionTextController::class, 'index']);

Route::resource('qatxts', Fis8QuestionAnswerTextController::class);
Route::get('/question-answer-text', [Fis8QuestionAnswerTextController::class, 'index']);

Route::resource('qansimgs', Fis8QuestionAnswerImageController::class);
Route::get('/question-answer-image', [Fis8QuestionAnswerImageController::class, 'index']);
