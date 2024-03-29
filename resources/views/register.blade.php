@extends('layouts.layout')

@section('name-page')
<p class="reg-name">РЕГИСТРАЦИЯ</p>
@endsection('name-page')

@section('form-page')
<form action="/registration" method="post" enctype="multipart/form-data">
    @csrf
    <input class="reg-input" type="text" name="name" id="name" placeholder="Имя и фамилия*">
    <input class="reg-input" type="file" name="photo" id="photo">
    <input class="reg-input" type="tel" name="login" id="login" placeholder="Номер телефона*">
    <input class="reg-input" type="password" name="password" id="password" placeholder="Пароль*">
    <button class="button" type="submit" >
        Зарегестрироваться
    </button><br>
    <a class="entrance" href="{{ Route('aut')}}">Войти</a>
</form>
@endsection('form-page')
