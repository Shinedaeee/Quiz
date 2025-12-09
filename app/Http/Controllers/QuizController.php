<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;


class QuizController extends Controller
{
    public function home()
    {
        $quizzes = Quiz::all();
        return view('home', compact('quizzes'));
    }

    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function show(Quiz $quiz)
    {
        $quiz->load('questions.answers');
        return view('quizzes.show', compact('quiz'));
    }

    public function submit(Request $request, Quiz $quiz)
{
    // Dynamiczne reguły walidacji dla KAŻDEGO pytania
    $rules = [];
    foreach ($quiz->questions as $question) {
        $rules["answers.{$question->id}"] = 'required|string|min:2|max:25';
    }

    $messages = [
        'required' => 'To pytanie wymaga odpowiedzi.',
        'min' => 'Odpowiedź musi mieć przynajmniej 2 znaki.',
        'max' => 'Odpowiedź nie może przekraczać 25 znaków.',
    ];

    $validatedData = $request->validate($rules, $messages);

    // Liczenie poprawnych odpowiedzi
    $correct = 0;

    foreach ($quiz->questions as $question) {
        $userAnswer = strtolower(trim($validatedData['answers'][$question->id]));
        $correctAnswer = strtolower(trim($question->correct_answer));

        if ($userAnswer === $correctAnswer) {
            $correct++;
        }
    }

    return redirect()->route('results.show', [
        'quiz' => $quiz->id,
        'score' => $correct
    ]);
}


}
