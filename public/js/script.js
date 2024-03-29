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

var btn = document.getElementById("addbouq");
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

// Открываем модальное окно при клике на кнопку
btn.onclick = function() {
  modal.style.display = "block";
  document.body.classList.add('modal-open');
}

// Закрываем модальное окно при клике на элемент для закрытия
span.onclick = function() {
  modal.style.display = "none";
  document.body.classList.remove('modal-open');
}


