<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/pers_kab.css') }}">
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
      <p>Грекова Карина</p>
      <div class="shop_basket">
        <a href="/catalog">
          <img src="{{ asset('css/img/basket.png') }}" alt="католог">
        </a>
      </div>
    </div>
    <div class="line"></div>
    <p class="new_order">Состояние букет</p>
    <div class="order-bouquet" id="order-bouquet">
      <div class="bouquet">
        <img src="{{ asset('/storage/image/image.png') }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <p class="descript_s">В обработке</p>
        <p class="descript_d">Доставка 15.03</p>
      </div>
      
      <div class="bouquet">
        <img src="{{ asset('/storage/image/image.png') }}" alt="">
        <p class="descript">букет "розовая<br> нежность"</p>
        <p class="descript_d">Доставлен</p>
        <button class="button_o" id="rating">Оставить отзыв</button>
      </div>
    </div>
    <!-- Кнопка для открытия модального окна -->


    <!-- Модальное окно -->
    <div id="modal" class="modal">
      <div class="modal-container">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p class="leave_o">Оставить отзыв</p>
          <form action="#" method="post">
            <p class="name_bouq">Название букета:</h3>
            <div class="rating">
              <div class="star-box">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <textarea id="comment" placeholder="Оставьте ваш отзыв" class="text_area"></textarea>
            <button id="submitReview" class="submit-button ">Отправить</button>
          </form>
          
        </div>
      </div>
    </div>


  </section>
</body>
<script src="{{ asset('js/script_rating.js') }}"></script>
<script src="https://kit.fontawesome.com/bfec730d56.js" 
crossorigin="anonymous"></script>
</html>