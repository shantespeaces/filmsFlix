<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;


Route::get("/", [FilmController::class, 'index'])
    ->name('films.index');

Route::get("/films/{id}", [FilmController::class, 'show'])
    ->name('films.show');
