document.addEventListener("DOMContentLoaded", function () {
	// Seleciona o formulário usando a classe, pois não há um id "heroForm"
	const form = document.querySelector(".form");
	const modal = document.querySelector(".modal"); // Certifique-se de que o modal existe na página
	const closeModal = document.querySelector(".modal__button"); // Certifique-se de que o botão de fechar o modal existe
	const checkbox = document.querySelector(".form__checkbox-input");
	const submitButton = document.querySelector(".form__button--submit");
	const inputs = document.querySelectorAll(
		".form__input, .form__textarea, .form__select, .form__radio",
	);

	// Função para verificar se todos os campos obrigatórios estão preenchidos
	function checkFormValidity() {
		let isValid = form.checkValidity(); // Verifica a validade do formulário
		let isCheckboxChecked = checkbox.checked; // Verifica se o checkbox está marcado
		submitButton.disabled = !(isValid && isCheckboxChecked);
	}

	// Adiciona evento de input para cada campo para verificar a validade
	inputs.forEach((input) => {
		input.addEventListener("input", checkFormValidity);
	});

	// Adiciona evento para o checkbox
	checkbox.addEventListener("change", checkFormValidity);

	// Exibe o modal ao submeter o formulário (caso o modal exista)
	form.addEventListener("submit", function (event) {
		event.preventDefault();
		if (modal) {
			modal.style.display = "flex";
		}
	});

	// Fecha o modal e reseta o formulário (caso o botão de fechar o modal exista)
	if (closeModal) {
		closeModal.addEventListener("click", function () {
			modal.style.display = "none";
			form.reset();
			submitButton.disabled = true; // Desativa o botão novamente após reset
		});
	}
});
