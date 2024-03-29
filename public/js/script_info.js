 // admin_account
 // Функция для открытия модального окна
 function openModal() {
  document.getElementById('myModal').style.display = 'block';
}

// Функции для обработки нажатия кнопок "принять" и "отменить"
function acceptOrder() {
  // Логика для принятия заказа
  // ...
  closeAndResetModal();
}

function cancelOrder() {
  // Логика для отмены заказа
  // ...
  closeAndResetModal();
}

// Функция для закрытия модального окна и сброса полей
function closeAndResetModal() {
  document.getElementById('myModal').style.display = 'none';
  document.getElementById('bouquetName').value = '';
  document.getElementById('clientName').value = '';
  document.getElementById('clientAddress').value = '';
  document.getElementById('clientWish').value = '';
}

