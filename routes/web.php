<?php

<<<<<<< HEAD
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;

Route::get('/', [QuizController::class, 'home'])->name('home');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

Route::get('/results/{quiz}', [ResultController::class, 'show'])->name('results.show');
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome'); // strona tytułowa
})->name('landing');

Route::get('/quizy', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{id}/wynik', [QuizController::class, 'result'])->name('quiz.result');
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
