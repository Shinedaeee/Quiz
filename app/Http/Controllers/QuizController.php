<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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


=======
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
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
}
