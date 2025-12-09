@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1 class="text-2xl font-bold mb-4">Wybierz quiz</h1>

    <div class="grid grid-cols-2 gap-6">

        @foreach($quizzes as $quiz)
            <a href="{{ route('quizzes.show', $quiz->id) }}" class="block p-4 border rounded shadow">
                <h2 class="text-xl font-semibold">{{ $quiz->title }}</h2>
                <p class="text-gray-600">{{ $quiz->category }}</p>
            </a>
        @endforeach

    </div>
=======

<h1 style="text-align: center; margin-bottom: 30px;">
    Wybierz Quiz
</h1>

<div style="display: flex; justify-content: center; width: 100%;">
    <div style="
        display: grid;
        grid-template-columns: repeat(2, 300px);
        gap: 25px;
        justify-content: center;
    ">
        @foreach($quizzes as $quiz)
        
            <a href="{{ route('quiz.show', $quiz->id) }}"
               style="
                   display: block;
                   padding: 15px;
                   border: 1px solid #ccc;
                   border-radius: 10px;
                   background: #f9f9f9;
                   text-decoration: none;
                   color: black;
                   transition: 0.2s;
                   text-align: center;
               "
               onmouseover="this.style.background='#ececec'"
               onmouseout="this.style.background='#f9f9f9'">

                <h3 style="margin-bottom: 10px;">{{ $quiz->title }}</h3>

                <img src="/images/{{ $quiz->image }}"
                     alt="{{ $quiz->title }}"
                     style="
                        width: 100%;
                        height: 170px;
                        object-fit: cover;
                        border-radius: 8px;
                     ">
            </a>

        @endforeach
    </div>
</div>

>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
@endsection
