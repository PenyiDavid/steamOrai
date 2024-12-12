<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\TagController;
use App\Models\Publisher;

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
Route::get('/new-game', [GameController::class, 'create'])->name('game.create');
Route::post('/new-game', [GameController::class, 'store'])->name('game.store');

Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
Route::get('new-tag', [TagController::class, 'create'])->name('tag.create');
Route::post('new-tag', [TagController::class, 'store'])->name('tag.store');

Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');
Route::get('/new-publisher',[PublisherController::class,'create'])->name('publisher.create');
Route::post('/new-publisher',[PublisherController::class, 'store'])->name('publisher.store');

require __DIR__.'/auth.php';
