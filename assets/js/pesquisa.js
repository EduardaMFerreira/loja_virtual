// Seleciona o formulário de pesquisa e o campo de input dentro do cabeçalho
const searchForm = document.querySelector('.cabecalho__conteudo__pesquisa');
const searchInput = document.querySelector('.cabecalho__conteudo__pesquisa__barra');

// Adiciona um listener para o evento 'submit' no formulário de pesquisa
searchForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtém o valor digitado no campo de pesquisa e converte para minúsculas
    const searchTerm = searchInput.value.toLowerCase();

    // Seleciona todas as seções dentro do conteúdo principal (seções de produtos)
    const allProductsSections = document.querySelectorAll('.conteudo > section');
    let found = false; // Variável que indica se algum produto foi encontrado

    // Loop por todas as seções de produtos
    allProductsSections.forEach(section => {
        // Seleciona todos os produtos dentro da seção (os nomes dos produtos)
        let products = section.querySelectorAll('.conteudo__novidades__variedade h3');

        // Se a seção for de vestuário, ajusta a seleção dos produtos (produtos têm o nome dentro de <p>)
        if (section.id === 'conteudo__vestuario') {
            products = section.querySelectorAll('.swiper p'); // No caso de vestuário, o nome dos produtos está em <p>
        }

        let sectionContainsVisibleProducts = false; // Indica se pelo menos um produto visível existe na seção

        // Loop pelos produtos dentro da seção
        products.forEach(product => {
            const productContainer = product.closest('.swiper') || product.parentElement;

            // Verifica se o nome do produto contém o termo de pesquisa
            if (product.textContent.toLowerCase().includes(searchTerm)) {
                productContainer.style.display = 'block'; // Exibe o produto correspondente
                sectionContainsVisibleProducts = true; // Marca que a seção contém produtos encontrados
                found = true; // Marca que algum produto foi encontrado
            } else {
                productContainer.style.display = 'none'; // Oculta o produto que não corresponde
            }
        });

        // Exibe ou oculta a seção com base nos produtos visíveis
        if (sectionContainsVisibleProducts) {
            section.style.display = 'block'; // Exibe a seção, mas apenas com os produtos encontrados
        } else {
            section.style.display = 'none'; // Oculta a seção completamente
        }
    });

    // Se nenhum produto for encontrado, exibe uma mensagem de alerta
    if (!found) {
        alert('Nenhum item encontrado!'); // Alerta informando que nenhum item corresponde à pesquisa
    }
});
