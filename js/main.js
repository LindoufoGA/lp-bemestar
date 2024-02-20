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
			selectedDiv.style.display = 'flex';
	}
}


// ANIMA SCROLL
function initAnimaScroll() {
  const sections = document.querySelectorAll(".js-content");
  if (sections.length) {
    const heigth = window.innerHeight * 0.6;

    function animaScroll() {
      sections.forEach((item) => {
        const distanciaTop = item.getBoundingClientRect().top;
        const secaoVisivel = distanciaTop - heigth < 0;
        if (secaoVisivel) {
          item.classList.add("ativo");
        }
      });
    }
    animaScroll();
    window.addEventListener("scroll", animaScroll);
  }
}
initAnimaScroll();
