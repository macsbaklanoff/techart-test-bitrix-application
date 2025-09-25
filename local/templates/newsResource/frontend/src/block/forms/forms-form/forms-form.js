import Inputmask from "inputmask";

document.addEventListener('DOMContentLoaded', function () {
	let form = document.getElementById('form');
	let phoneInput = document.getElementById('phone-input');
	let telMask = new Inputmask('+7(999) 999-99-99');
	const errors = document.getElementById('errors');

	telMask.mask(phoneInput);

	form.addEventListener('submit', function (event) {
		errors.innerHTML = '';
		let nameInput = document.getElementById('name-input');
		let emailInput = document.getElementById('email-input');
		let messageInput = document.getElementById('message-input');
		
		let errorsList = [];
		if (nameInput.value.toString().trim().length <= 1) {
			errorsList.push('<p>Введенное имя некорректно!</p>');
		}
		if (emailInput.value.toString().trim().length == 0 && !telMask.isValid(phoneInput.value)) {
			errorsList.push('<p>Введите email или номер телефона!</p>');
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