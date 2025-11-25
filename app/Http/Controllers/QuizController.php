<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Wyświetlenie listy quizów (strona z kategoriami)
     */
    public function index()
    {
        // Pobieramy wszystkie quizy z ich nazwą i obrazkiem
        $quizzes = Quiz::all();

        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Wyświetlenie konkretnego quizu wraz z pytaniami i odpowiedziami
     */
    public function show($id)
    {
        // Pobieramy quiz + pytania + odpowiedzi
        $quiz = Quiz::with('questions.answers')->findOrFail($id);

        return view('quizzes.show', compact('quiz'));
    }

    /**
     * Wyświetlenie wyniku quizu
     */
    public function result(Request $request, $id)
    {
        $quiz = Quiz::with('questions.answers')->findOrFail($id);

        $points = 0;
        $results = [];

        foreach ($quiz->questions as $index => $question) {

            // Odpowiedź użytkownika z POST
            $userAnswerId = $request->input('question_' . $index);

            // Poprawna odpowiedź (z bazy)
            $correctAnswer = $question->answers->where('is_correct', 1)->first();

            // Liczenie punktu
            if ($userAnswerId && $correctAnswer && $userAnswerId == $correctAnswer->id) {
                $points++;
            }

            // Zapis do tabeli wyników
            $results[] = [
                'question' => $question->question_text,
                'answers' => $question->answers,
                'correct' => $correctAnswer,
                'userAnswer' => $userAnswerId,
            ];
        }

        return view('quizzes.result', [
            'quiz' => $quiz,
            'points' => $points,
            'total' => $quiz->questions->count(),
            'results' => $results,
        ]);
    }
}
