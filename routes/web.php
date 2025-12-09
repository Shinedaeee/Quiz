<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;

Route::get('/', [QuizController::class, 'home'])->name('home');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

Route::get('/results/{quiz}', [ResultController::class, 'show'])->name('results.show');
