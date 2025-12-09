<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class ResultController extends Controller
{
    public function show(Request $request, Quiz $quiz)
    {
        $score = $request->score;
        $total = $quiz->questions()->count();

        return view('quizzes.result', compact('quiz', 'score', 'total'));
    }
}
