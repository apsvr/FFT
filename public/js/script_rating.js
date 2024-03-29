// Открыть модальное окно при клике на кнопку
document.getElementById('rating').addEventListener('click', function() {
  document.getElementById('modal').style.display = 'block';
});

var modal = document.getElementById("modal");
var span = document.getElementsByClassName("close")[0];
// Закрыть модальное окно при клике на крестик или вне окна
document.querySelector('.close').addEventListener('click', function() {
  document.getElementById('modal').style.display = 'none';
});

// span.onclick = function() {
//   modal.style.display = "none";
//   document.body.classList.remove('modal-open');
// }

window.onclick = function(event) {
  if (event.target == document.getElementById('modal')) {
    document.getElementById('modal').style.display = 'none';
  }
};

// Отправить отзыв
document.getElementById('submitReview').addEventListener('click', function() {
  // Получение данных отзыва (оценка, комментарий) и отправка на сервер
  // ...
  // Закрыть модальное окно
  document.getElementById('modal').style.display = 'none';
});

const stars = document.querySelectorAll('.star-box i');

stars.forEach((star, index1) =>{
    star.addEventListener('click', () => {
        stars.forEach((star, index2) => {
            index1 >= index2 ? star.classList.add('checked') : star.classList.remove('checked')
        });
    });
});
