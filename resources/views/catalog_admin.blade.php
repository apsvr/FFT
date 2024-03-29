<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
  <title>Flower Fairy Tale</title>
</head>
<body>
  <a href="/admin_account" class="title">Flower Fairy Tale</a><br>
  <section class="catalog">
    <div class="top-catalog">
      <p class="title-catalog">Каталог</p>
      <button class="add_bouq" id="addbouq">Добавить букет</button>
    </div>
    <div class="link">
      <a href="/catalog">Все букеты</a>
      <a href="/catalog/march">8 марта</a>
      <a href="/catalog/february">14 февраля</a>
      <a href="/catalog/marriage">Свадебные букеты</a>
      <a href="/catalog/birthday">День рождения</a>
    </div>
    <div class="catalog-bouquet" id="catalog-bouquet">
      @foreach($bouquets as $bouquet)
      <div class="bouquet">
        <img src="{{ asset('/storage/' . $bouquet->photoBouquet) }}" alt="">
        <p class="descript">{{ $bouquet->nameBouquet }}</p>

        <button id="button" class="button" data-toggle="modal"
          data-target="{{$bouquet->id}}">{{ $bouquet->price }} руб</button>
      </div>
      <!-- Первое модальное окно -->
      <div class="modal" id="{{$bouquet->id}}">
        <div class="modal-container">
          <div class="modal-content-order">
            <span class="close">&times;</span>
            <p class="title-catalog-order">Оформление заказа</p>

            <div class="flex-container_order">
              <div class="left-column_order">
                <img src="{{ asset('/storage/' . $bouquet->photoBouquet) }}" alt="Фото букета">
                <p class="descript">{{ $bouquet->nameBouquet }}</p>
              </div>
              <div class="right-column_order">
                <form class="form_add" action="/order" method="post">
                  @csrf
                  <input type="hidden" id="bouquet_id" name="bouquet_id" value="{{$bouquet->id}}">
                  <input type="text" id="address" name="address" placeholder="Адрес"><br>
                  <textarea id="wishes" class=text_area name="wishes" placeholder="Пожелания клиента"></textarea>
                  <p class="note">*На доставку требуется от 3 до 5 дней!</p>
                  <p class="note">*Цена доставки включена в цену букета</p><br>
                  @if( auth()->id() != null )
                    <button class="button_order">Заказать</button>
                  @endif
                </form>
                @if($bouquet->reviews->count() > 0)
                <button type="submit" data-toggle="modal" data-target="{{$bouquet->id}}Review"
                  class="button_order">Отзывы</button>
                  @else
                  <div class="text_non_reviews">
                    Отзывов нет
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Второе модальное окно -->
      @if($reviews->count() > 0)
      <div id="{{$bouquet->id}}Review" class="modal">
        <div class="modal-container modal_review">
          <div class="modal-content-order">
            <span class="close closeReview">&times;</span>
            <p class="title-catalog-order">Отзывы</p>
            <div class="flex-container_order ">
              <div class="left-column_order">
                <img src="{{ asset('/storage/' . $bouquet->photoBouquet) }}" alt="Фото букета">
                <p class="descript">{{ $bouquet->nameBouquet }}</p>
              </div>
              <div class="reviews_order">
                <div class="right-column_order">
                    @foreach($reviews->where('bouquet_id', $bouquet->id) as $review)
                    <div class="review">
                      <div class="top-review">
                        <p>{{ $review->user->name }}</p>
                        <div class="rating">
                          <div class="star-box">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>
                      <div class="text-review">
                        {{$review->review}}
                      </div>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
    @if($bouquets->count() > 3)
      <button class="show-more" id="show-more" onclick="showMore()">Показать ещё</button>
    @endif
  </section>
  
  <div id="myModal" class="modal">
      <div class="modal-container">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p class="title-catalog">НОВЫЙ БУКЕТ</p>
          <form class="form_add" action="/add_bouquet" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photoBouquet" id="photoBouquet"><br>
            <input type="text" name="nameBouquet" id="nameBouquet" placeholder="Название"><br>
            <input type="number" name="price" id="price" placeholder="Цена"><br>
            <select id="holiday" name="holiday" class="input-field mbottom">
              <option value="">Без праздника</option>
              @foreach($holidays as $holiday)
                <option value="{{$holiday->id}}">{{$holiday->nameHoliday}}</option>
              @endforeach
            </select><br>
            <button class="add_btn">Добавить</button>
          </form>
        </div>
      </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/order.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://kit.fontawesome.com/bfec730d56.js" crossorigin="anonymous"></script>
</html>