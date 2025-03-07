<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// PublicController
Route::get('/', [PublicController::class, 'welcome'])->name('homepage');

// AdController
Route::get('/ad/create', [AdController::class, 'create'])->name('create.ad')->middleware('auth');
Route::get('/ad/index', [AdController::class, 'index'])->name('index.ad');
