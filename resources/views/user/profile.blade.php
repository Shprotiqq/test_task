@extends('layouts.layout')

@section('title')
    <title>Профиль</title>
@endsection

@section('content')

    <main>
        <h1>Ваш профиль</h1>
        <p>Ваше имя: {{ auth()->user()->name }}</p>
        <p>Ваш e-mail: {{ auth()->user()->email }}</p>
        <p>Дата регистрации: {{ auth()->user()->created_at->format("d-m-Y") }}</p>
        <a class="btn btn-primary" href="{{ route('password.request') }}">Смена пароля</a>
    </main>

@endsection
