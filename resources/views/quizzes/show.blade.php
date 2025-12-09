@extends('layouts.app')

@section('content')

<<<<<<< HEAD
<h1 class="text-2xl font-bold mb-6">{{ $quiz->title }}</h1>

<form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST">
    @csrf

    @foreach($quiz->questions as $question)
        <div class="mb-6 p-4 bg-white shadow rounded">

            <p class="font-semibold mb-2">
                {{ $loop->iteration }}. {{ $question->text }}
            </p>

            <input type="text"
                name="answers[{{ $question->id }}]"
                value="{{ old("answers.$question->id") }}"
                class="border p-2 w-full rounded"
                placeholder="Twoja odpowiedź...">

            @error("answers.$question->id")
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
            @enderror
=======
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
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08

        </div>
    @endforeach

<<<<<<< HEAD
    <button type="submit"
        class="mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        Zatwierdź odpowiedzi
    </button>
=======
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

>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
</form>

@endsection
