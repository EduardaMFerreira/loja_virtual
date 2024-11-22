const searchForm = document.querySelector('.cabecalho__conteudo__pesquisa');
const searchInput = document.querySelector('.cabecalho__conteudo__pesquisa__barra');

searchForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio do formulário

    const searchTerm = searchInput.value.toLowerCase(); // Obtém o texto da pesquisa
    const allProductsSections = document.querySelectorAll('.conteudo > section'); // Seleciona todas as seções de produtos
    let found = false;

    // Loop por todas as seções de produtos
    allProductsSections.forEach(section => {
        // Seleciona todos os produtos dentro da seção
        let products = section.querySelectorAll('.conteudo__novidades__variedade h3');

        // Caso seja a seção de vestuário, seleciona os itens de forma diferente
        if (section.id === 'conteudo__vestuario') {
        products = section.querySelectorAll('.item p'); // Produtos em vestuário têm nome dentro de `<p>`
        }

        let sectionContainsProduct = false;

        products.forEach(product => {
            if (product.textContent.toLowerCase().includes(searchTerm)) {
                // Para produtos em vestuário, é necessário ajustar a exibição do elemento pai
                const productContainer = product.closest('.item') || product.parentElement;
                productContainer.style.display = 'block'; // Exibe o produto
                sectionContainsProduct = true;
            } else {
                const productContainer = product.closest('.item') || product.parentElement;
                productContainer.style.display = 'none'; // Oculta o produto
            }
        });

        if (sectionContainsProduct) {
        section.style.display = 'block'; // Exibe a seção se algum produto corresponder
        found = true;
        } else {
        section.style.display = 'none'; // Caso contrário, esconde a seção
        }
    });

    // Se nenhum produto for encontrado, exibe uma mensagem de alerta
    if (!found) {
        alert('Nenhum item encontrado!');
    }
});