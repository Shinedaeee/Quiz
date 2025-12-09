@extends('layouts.app')

@section('content')

<h1>Wynik quizu: {{ $quiz->title }}</h1>

<p>Twój wynik: <strong>{{ $score }} / {{ $total }}</strong></p>

<a href="{{ route('home') }}">Powrót</a>

@endsection
