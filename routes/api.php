<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);

Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/{id}', [SongController::class, 'show']);
Route::post('/songs/{id}/play', [SongController::class, 'incrementPlayCount']);
