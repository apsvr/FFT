<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Flower Fairy Tale</title>
</head>
<body>

  <section class="main">
    @auth
    <a href="/profile" class="btn-profile">
      <svg class="profile" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#A77AE9" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
      </svg>
    </a>
    @endauth
    @guest
    <a href="/registration" class="btn-profile">
      <svg class="profile" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#A77AE9" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
      </svg>
    </a>
    @endguest
    
    <p class="title">Flower Fairy Tale</p>
    <p class="slogan">Добро пожаловать в Flower Fairy Tale - ваше волшебное место, где цветы становятся героями сказок! Мы - команда талантливых флористов, вдохновленных красотой природы и магией цветов. Наша миссия - превратить ваше мероприятие в настоящую сказку, наполнив ее атмосферу нежности и утонченности.</p>
    <a class="catalog" href="/catalog">В каталог</a>
    <div class="contact">
      <p>Адрес магазина: Гайдара 17 кв.18</p>
      <p>Номер телефона +79522582420</p>
      <p>Доставка по г. Архангельск</p>
    </div>
  </section>
</body>
</html>