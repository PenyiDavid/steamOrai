<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TagController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', function() {
    $users=User::all();
    return view('users', compact('users'));
});
Route::get('/games', [GameController::class, 'index'])->name('game.index');


Route::get('/tags', [TagController::class, 'index'])->name('tag.index');

require __DIR__.'/auth.php';
