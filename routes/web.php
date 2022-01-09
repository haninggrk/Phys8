<?php

use App\Http\Controllers\AccessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fis8CategoryController;
use App\Http\Controllers\Fis8CodeController;
use App\Http\Controllers\Fis8LevelController;
use App\Http\Controllers\Fis8QuestionController;
use App\Http\Livewire\AdminDataFeazyHistory;
use App\Http\Livewire\AdminDataUser;
use App\Http\Livewire\QuizGamePlay;
use App\Http\Livewire\AdminDataGamePlayHistory;
use App\Http\Livewire\FastTrackGame;
use App\Http\Livewire\Home;

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
    return view('Login');
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


Route::post('/register', function () {
    return view('register');
});

Route::get('/cobaadminuser', AdminDataUser::class);

Route::get('/game', function () {
    return view('game');
});
Route::get('/quiz_game_play', QuizGamePlay::class);
Route::get('/adminhistory', AdminDataGamePlayHistory::class);

///////////start
Route::post('/login_process', [AccessController::class, 'loginProcess'])->name('login_process');
Route::get('/home', Home::class)->name('home');
Route::get('/logout',  [AccessController::class, 'logout'])->name('logout');
Route::get('/fast_track', FastTrackGame::class)->name('fast_track_game');
