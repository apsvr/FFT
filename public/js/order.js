$(document).ready(function(){
  $('.button').click(function(){
    var bouquetId = $(this).data('target');
    $('#' + bouquetId).fadeIn();
    $('body').css('overflow-y', 'hidden');
  });

  // Закрытие модального окна при нажатии на кнопку закрытия
  $('.close').click(function(){
    $(this).closest('.modal').fadeOut();
    $('body').css('overflow-y', 'scroll');
  });

  // Закрытие модального окна при нажатии на фон
  $('.modal').click(function(event){
    if ($(event.target).hasClass('modal')) {
      $(this).fadeOut();
    }
  });

  $('.button_order').click(function(){
    var bouquetIdReview = $(this).data('target');
    $('#' + bouquetIdReview).fadeIn();
  });
});

var button = document.getElementById("show-more");

var list = document.getElementById("catalog-bouquet");
var items = list.getElementsByClassName("bouquet");
var visibleItemCount = 8; // количество элементов, которые отображаются изначально
var hiddenItemCount = items.length - visibleItemCount; // количество скрытых элементов

// Скрыть все элементы, кроме первых visibleItemCount
for (var i = visibleItemCount; i < items.length; i++) {
  items[i].style.display = "none";
}

button.onclick = function() {
  // Отобразить следующие hiddenItemCount элементов
  for (var i = visibleItemCount; i < visibleItemCount + 8; i++) {
    if (items[i]) {
      items[i].style.display = "block";
    }
  }
  visibleItemCount += 8;
  // Если все элементы отображены, скрыть кнопку
  if (visibleItemCount + 8 >= items.length + 8) {
    button.style.display = "none";
  }
};
