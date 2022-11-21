<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::get('/', [GameController::class, 'index'])->Name('games');
Route::get('/games', [GameController::class, 'index'])->Name('games');
Route::get('/games/{$id}', [GameController::class, 'show'])->Name('game');
Route::get('/games/create', [GameController::class, 'create']);
