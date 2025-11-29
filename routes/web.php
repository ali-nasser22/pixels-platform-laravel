<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dev/login', function () {
    $user = User::first('id', 3);
    Auth::login($user);
    request()->session()->regenerate();
    return redirect()->intended(\route('profile.show', $user->profile));
})->name('login');


Route::get('/dev/logout', function () {
    $user = User::inRandomOrder()->first();
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->intended('/feed');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('posts.home');
});

Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/{profile:handle}/with-replies', [ProfileController::class, 'replies'])->name('profile.replies');


// scopeBindings checks if post belongs to profile
Route::scopeBindings()->group(function () {
    Route::get('/{profile:handle}/status/{post}', [PostController::class, 'show'])->name('posts.show');
});
