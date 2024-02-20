document.addEventListener('DOMContentLoaded', function () {
	// Ao carregar a página, mostrar o conteúdo da primeira div
	mostrarConteudo('perda');
});

function mostrarConteudo(target) {
	// Oculta todas as divs
	const divs = document.querySelectorAll('.div-item');
	divs.forEach(function (div) {
			div.style.display = 'none';
	});

	// Exibe a div correspondente ao target
	const selectedDiv = document.getElementById(target);
	if (selectedDiv) {
			selectedDiv.style.display = 'block';
	}
}
