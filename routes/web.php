<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/activity/meeting', [PageController::class, 'activityMeeting'])->name('activitymeeting');
Route::get('/activity/focus', [PageController::class, 'activityFocus'])->name('activityfocus');
Route::get('/activity/teamwork', [PageController::class, 'activityTeamwork'])->name('activityteamwork');
Route::get('/activity/cafe/1', [PageController::class, 'activityCafe'])->name('cafe1');
Route::get('/cafe/{id}', [PageController::class, 'activityCafe'])->name('cafe1');

Route::post('/cafe/{id}/review', [DataController::class, 'submitReview'])->name('reviews.submit');



require __DIR__.'/auth.php';
