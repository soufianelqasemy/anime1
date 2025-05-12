<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/search', [AnimeController::class, 'search'])->name('anime.search');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');
