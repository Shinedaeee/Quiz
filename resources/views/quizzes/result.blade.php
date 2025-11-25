@extends('layouts.app')

@section('content')

<h1 style="text-align: center; margin-bottom: 20px;">
    Wyniki — {{ $quiz->title }}
</h1>

<h2 style="text-align: center; margin-bottom: 30px;">
    Zdobyte punkty: {{ $points }} / {{ $total }}
</h2>

<table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
    <tr style="background: #f0f0f0;">
        <th style="padding: 10px; border: 1px solid #ccc;">Pytanie</th>
        <th style="padding: 10px; border: 1px solid #ccc;">Twoja odpowiedź</th>
        <th style="padding: 10px; border: 1px solid #ccc;">Poprawna odpowiedź</th>
    </tr>

    @foreach($results as $row)
        <tr>
            {{-- PYTANIE --}}
            <td style="padding: 10px; border: 1px solid #ccc;">
                {{ $row['question'] }}
            </td>

            {{-- ODPOWIEDŹ UŻYTKOWNIKA --}}
            @php
                // zapisujemy obiekt poprawnej odpowiedzi:
                $correct = $row['correct'];

                // userAnswer to ID odpowiedzi lub null
                $userAnswerId = $row['userAnswer'];

                // pobieramy tekst odpowiedzi użytkownika (jeśli istnieje)
                $userAnswerText = null;
                if ($userAnswerId) {
                    $answerObj = $row['answers']->firstWhere('id', $userAnswerId);
                    if ($answerObj) {
                        $userAnswerText = $answerObj->answer_text;
                    }
                }

                $isCorrect = $userAnswerId && $correct && $userAnswerId == $correct->id;
            @endphp

            <td style="
                padding: 10px;
                border: 1px solid #ccc;
                color: {{ $isCorrect ? 'green' : 'red' }};
            ">
                @if($userAnswerText)
                    {{ $userAnswerText }}
                @else
                    Brak odpowiedzi
                @endif
            </td>

            {{-- POPRAWNA ODPOWIEDŹ --}}
            <td style="padding: 10px; border: 1px solid #ccc;">
                {{ $correct ? $correct->answer_text : 'BRAK' }}
            </td>
        </tr>
    @endforeach
</table>

<div style="text-align: center;">
    <a href="{{ route('quiz.index') }}"
       style="
           padding: 12px 25px;
           background: #4caf50;
           color: white;
           text-decoration: none;
           font-size: 18px;
           border-radius: 8px;
       ">
        Wróć do strony głównej
    </a>
</div>

@endsection
