@extends('layouts.app')

@section('content')

<div style="
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    flex-direction: column;
    text-align: center;
">
    <h1 style="font-size: 48px; margin-bottom: 20px;">
        Witaj w Quiz Centrum!
    </h1>

    <p style="font-size: 20px; margin-bottom: 30px;">
        Sprawdź swoją wiedzę w różnych kategoriach.
    </p>

    <a href="{{ route('quiz.index') }}"
       style="
           padding: 15px 40px;
           background: #4caf50;
           color: white;
           font-size: 22px;
           text-decoration: none;
           border-radius: 10px;
           transition: .2s;
       "
       onmouseover="this.style.background='#45a049'"
       onmouseout="this.style.background='#4caf50'">
        Rozpocznij
    </a>
</div>

@endsection
