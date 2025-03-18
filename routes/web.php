<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

// PublicController
Route::get('/', [PublicController::class, 'welcome'])->name('homepage');
Route::get('/search/ad', [PublicController::class, 'searchAd'])->name('ad.search');
// cambio lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

// AdController
Route::get('/ad/create', [AdController::class, 'create'])->name('create.ad')->middleware('auth');
Route::get('/ad/index', [AdController::class, 'index'])->name('index.ad');
Route::get('/ad/show/{ad}', [AdController::class, 'show'])->name('show.ad');

Route::get('/category/{tag}', [AdController::class, 'byCategory'])->name('byCategory');

// RevisorController
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{ad}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{ad}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor')->middleware('auth');
Route::get('/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');



