<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit']);
Route::post('/authors/{id}', [AuthorController::class, 'update']);
