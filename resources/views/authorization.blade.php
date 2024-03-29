@extends('layouts.layout')

@section('name-page')
<p class="auth-name">АВТОРИЗАЦИЯ</p>
@endsection('name-page')

@section('form-page')
<form class="auth" action="/authorization" method="post">
    @csrf
    <input class="auth-input" type="tel" name="login" id="login" placeholder="Номер телефона*">
    <input class="auth-input" type="password" name="password" id="password" placeholder="Пароль*">
    <button class="button btn-auth" type="submit">
        Войти
    </button><br>
    <a class="entrance" href="{{ Route('reg')}}">Регистрация</a><br>
    <a class="entrance" href="/recovery">Забыли пароль?</a>
</form>
@endsection('form-page')