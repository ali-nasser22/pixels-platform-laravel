<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/{profile:handle}/with-replies', [ProfileController::class, 'replies'])->name('profile.replies');
