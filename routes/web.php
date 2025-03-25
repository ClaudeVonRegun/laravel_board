<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ReplyController;
use App\Models\Reply;
use App\Models\Tweet;
use Illuminate\Support\Facades\Route;

// Route::get('users', [UserController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//   return redirect()->route('login');
// });

Route::get('/', function () {
  return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
  Route::resource('tweets', TweetController::class);
  Route::post('tweets/{tweet}/replies', [ReplyController::class, 'store'])->name('replies.store');
});
// Route::resource('reply', ReplyController::class);

require __DIR__.'/auth.php';
