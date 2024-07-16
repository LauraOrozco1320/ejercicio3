<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PresidentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('goals', [GoalController::class, 'index'])->name('goals.index');
Route::get('goals/create', [GoalController::class, 'create'])->name('goals.create');
Route::post('goals', [GoalController::class, 'store'])->name('goals.store');
Route::get('goals/{goal}', [GoalController::class, 'show'])->name('goals.show');
Route::get('goals/{goal}/edit', [GoalController::class, 'edit'])->name('goals.edit');
Route::put('goals/{goal}', [GoalController::class, 'update'])->name('goals.update');
Route::delete('goals/{goal}', [GoalController::class, 'destroy'])->name('goals.destroy');


Route::get('games', [GameController::class, 'index'])->name('games.index');
Route::get('games/create', [GameController::class, 'create'])->name('games.create');
Route::post('games', [GameController::class, 'store'])->name('games.store');
Route::get('games/{game}', [GameController::class, 'show'])->name('games.show');
Route::get('games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('games/{game}', [GameController::class, 'destroy'])->name('games.destroy');


Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('teams', [TeamController::class, 'store'])->name('teams.store');
Route::get('teams/{team}', [TeamController::class, 'show'])->name('teams.show');
Route::get('teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('teams/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');


Route::get('players', [PlayerController::class, 'index'])->name('players.index');
Route::get('players/create', [PlayerController::class, 'create'])->name('players.create');
Route::post('players', [PlayerController::class, 'store'])->name('players.store');
Route::get('players/{player}', [PlayerController::class, 'show'])->name('players.show');
Route::get('players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('players/{player}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');


Route::get('presidents', [PresidentController::class, 'index'])->name('presidents.index');
Route::get('presidents/create', [PresidentController::class, 'create'])->name('presidents.create');
Route::post('presidents', [PresidentController::class, 'store'])->name('presidents.store');
Route::get('presidents/{president}', [PresidentController::class, 'show'])->name('presidents.show');
Route::get('presidents/{president}/edit', [PresidentController::class, 'edit'])->name('presidents.edit');
Route::put('presidents/{president}', [PresidentController::class, 'update'])->name('presidents.update');
Route::delete('presidents/{president}', [PresidentController::class, 'destroy'])->name('presidents.destroy');
