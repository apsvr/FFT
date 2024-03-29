@extends('layouts.layout')


@section('name-page')
<p class="recovery-name">Восстановление пароля</p>
@endsection('name-page')

@section('form-page')
<form class="auth" action="/recov" method="post">
    @csrf
    <input class="auth-input bottom" type="tel" name="phoneNumber" id="phoneNumber" placeholder="Номер телефона*">
    <button class="button btn-auth" type="submit" >
        Восстановить
    </button><br>
    <a class="entrance" href="/register">Регистрация</a><br>
    <a class="entrance" href="/authorization">Авторизация</a>
</form>
@endsection('form-page')