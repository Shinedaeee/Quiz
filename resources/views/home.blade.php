@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">Witamy na stronie! Wybierz quiz:</h1>

<div class="grid grid-cols-2 gap-6">

    @foreach($quizzes as $quiz)
        <a href="{{ route('quizzes.show', $quiz->id) }}"
           class="block p-6 bg-white shadow rounded hover:bg-blue-50 transition">

            <h2 class="text-xl font-semibold mb-2">{{ $quiz->title }}</h2>
            <p class="text-gray-600">{{ $quiz->category }}</p>

        </a>
    @endforeach

</div>

@endsection
