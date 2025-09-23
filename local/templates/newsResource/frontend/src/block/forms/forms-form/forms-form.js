document.addEventListener('DOMContentLoaded', function () {
	let form = document.getElementById('form');
	const errors = document.getElementById('errors');

	form.addEventListener('submit', function (event) {
		errors.innerHTML = '';
		let nameInput = document.getElementById('name-input');
		let emailInput = document.getElementById('email-input');
		let messageInput = document.getElementById('message-input');
		let phoneInput = document.getElementById('phone-input');
		const reg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
		let errorsList = [];
		if (nameInput.value.toString().trim().length <= 1) {
			errorsList.push('<p>Введенное имя некорректно!</p>');
		}
		if (emailInput.value.toString().length == 0 && phoneInput.value.toString().trim().length == 0) {
			errorsList.push('<p>Заполните email или номер телефона!</p>')
		}
		if (emailInput.value.toString().match(reg) == null && phoneInput.value.toString().trim().length == 0) {
			errorsList.push('<p>Введенный email некорректен!</p>')
		}
		if (messageInput.value.toString().trim().length <= 1) {
			errorsList.push('<p>Введите сообщение!</p>');
		}
		if (errorsList.length != 0) {
			event.preventDefault();
			errors.innerHTML = errorsList.join(' ');
			return;
		}
	});
});