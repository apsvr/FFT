<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="{{ asset('css/pers_kab.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('css/admin_kab.css') }}">
  <title>Flower Fairy Tale</title>
</head>

<body>

  <section class="main">
    <div>
      <form action="/logout" method="get">
        @csrf
        <button type="submit" class="button_ex">Выход</button>
      </form>
    </div>
    <div class="name_profile">
      <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="фото профиля">
      <p>{{$user->name}}</p> 
      <div class="shop_basket">
        <a href="/catalog_admin">
          <img src="{{ asset('css/img/basket.png') }}" alt="католог">
        </a>
      </div>
    </div>
    <div class="line"></div>
    <p class="new_order">Новые заказы</p>
    <div class="order-bouquet" id="order-bouquet">
      @foreach($orders as $bouquet)
        {{$bouquet->id}}
      @endforeach
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <button class="button" onclick="openModal()">Подробней</button>
      </div>
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <button class="button" onclick="openModal()">Подробней</button>
      </div>
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <button class="button" onclick="openModal()">Подробней</button>
      </div>
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <button class="button" onclick="openModal()">Подробней</button>
      </div>
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $user->photoUser) }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <button class="button" onclick="openModal()">Подробней</button>
      </div>
    </div>
    

    <div id="myModal" class="modal">
      <div class="modal-content">
        <img class="modal-image" src="{{ asset('/storage/' . $user->photoUser) }}" alt="Фото букета">
        <div>
          <div>
            <p for="bouquetName" class="info">розовая нежность</p>
            <p for="clientName" class="info">Андрей Кузьмин</p>
            <p for="clientAddress" class="info">г.Арх. ул. Воронина 30к3</p>
            <p for="clientWish" class="info">напишите на запике "мяумяу"</p>
          </div>
          <div class="modal-buttons">
            <button class="button_decision" onclick="acceptOrder()">Принять</button>
            <button class="button_decision" onclick="cancelOrder()">Отменить</button>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</body>
<script src="http://127.0.0.1:8000/js/script_info.js"></script>

</html>