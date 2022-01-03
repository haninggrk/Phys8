<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fis8CategoryController;
use App\Http\Controllers\Fis8CodeController;
use App\Http\Controllers\Fis8LevelController;
use App\Http\Controllers\Fis8QuestionController;
use App\Http\Livewire\AdminDataUser;

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

Route::get('/cobaadminuser', AdminDataUser::class);

Route::get('/game', function () {
    return view('game');
});
