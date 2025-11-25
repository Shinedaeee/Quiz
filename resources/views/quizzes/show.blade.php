@extends('layouts.app')

@section('content')

<h1 style="margin-bottom: 25px; text-align: center;">
    {{ $quiz->title }}
</h1>

{{-- FORMULARZ WYSYŁA ODPOWIEDZI NA STRONĘ WYNIKÓW --}}
<form method="POST" action="{{ route('quiz.result', $quiz->id) }}" style="max-width: 800px; margin: 0 auto;">
    @csrf

    @foreach($quiz->questions as $index => $question)
        <div style="
            margin-bottom: 30px; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 8px;
            background: #fafafa;
        ">

            <h3 style="margin-bottom: 15px;">
                {{ $index + 1 }}. {{ $question->question_text }}
            </h3>

            @foreach($question->answers as $answer)
                <div style="margin-bottom: 10px;">
                    <label style="cursor: pointer;">
                        <input 
                            type="radio"
                            name="question_{{ $index }}"
                            value="{{ $answer->id }}"
                            style="margin-right: 8px;"
                        >
                        {{ $answer->answer_text }}
                    </label>
                </div>
            @endforeach

        </div>
    @endforeach

    <div style="text-align: center;">
        <button type="submit"
            style="
                padding: 12px 25px;
                font-size: 18px;
                cursor: pointer;
                background: #4caf50;
                color: white;
                border: none;
                border-radius: 6px;
            ">
            Zakończ quiz
        </button>
    </div>

</form>

@endsection
