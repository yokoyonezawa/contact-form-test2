<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'store']);
// Route::get('/verror', [ContactController::class, 'confirm']);