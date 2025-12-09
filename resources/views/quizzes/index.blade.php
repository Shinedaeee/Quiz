@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Wybierz quiz</h1>

    <div class="grid grid-cols-2 gap-6">

        @foreach($quizzes as $quiz)
            <a href="{{ route('quizzes.show', $quiz->id) }}" class="block p-4 border rounded shadow">
                <h2 class="text-xl font-semibold">{{ $quiz->title }}</h2>
                <p class="text-gray-600">{{ $quiz->category }}</p>
            </a>
        @endforeach

    </div>
@endsection
