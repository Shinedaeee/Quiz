@extends('layouts.app')

@section('content')

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

        </div>
    @endforeach

    <button type="submit"
        class="mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        Zatwierdź odpowiedzi
    </button>
</form>

@endsection
