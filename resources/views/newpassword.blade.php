@extends('layouts.layout')


@section('name-page')
<p class="recovery-name">Придумайте новый пароль</p>
@endsection('name-page')

@section('form-page')
<form class="auth" action="/newpassword" method="post">
    @csrf
    <input type="hidden" name="phoneNumber" value="{{ $number }}">
    <input class="auth-input" type="password" name="password" id="password" placeholder="Пароль*">
    <input class="auth-input" type="password" name="repeatpassword" id="repeatpassword" placeholder="Повторите пароль*">
    <button class="button btn-auth" type="submit" >
        Подтвердить
    </button><br>
    <a class="entrance" href="/register">Регистрация</a><br>
    <a class="entrance" href="/authorization">Авторизация</a>
</form>
@endsection('form-page')