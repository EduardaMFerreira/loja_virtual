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
    let found = false;// Variável que indica se algum produto foi encontrado

    // Loop por todas as seções de produtos
    allProductsSections.forEach(section => {
        // Seleciona todos os produtos dentro da seção (os nomes dos produtos)
        let products = section.querySelectorAll('.conteudo__novidades__variedade h3');

        // Se a seção for de vestuário, ajusta a seleção dos produtos (produtos têm o nome dentro de <p>)
        if (section.id === 'conteudo__vestuario') {
        products = section.querySelectorAll('.swiper p'); // No caso de vestuário, o nome dos produtos está em <p>
        }

        let sectionContainsProduct = false; // Flag que indica se a seção contém ao menos um produto correspondente

        // Loop pelos produtos dentro da seção
        products.forEach(product => {
            // Verifica se o nome do produto contém o termo de pesquisa
            if (product.textContent.toLowerCase().includes(searchTerm)) {
                 // Se for encontrado, exibe o produto
                const productContainer = product.closest('.swiper') || product.parentElement;
                productContainer.style.display = 'block'; // Exibe o produto
                sectionContainsProduct = true; // Marca a seção como contendo produtos encontrados
            } else {
                // Caso contrário, oculta o produto
                const productContainer = product.closest('.swiper') || product.parentElement;
                productContainer.style.display = 'none'; // Oculta o produto
            }
        });

        // Se ao menos um produto for encontrado, exibe a seção
        if (sectionContainsProduct) {
            section.style.display = 'block'; // Exibe a seção de produtos
            found = true; // Marca que algum item foi encontrado
        } else {
            // Caso contrário, esconde a seção
            section.style.display = 'none'; // Oculta a seção
        }
    });

    // Se nenhum produto for encontrado, exibe uma mensagem de alerta
    if (!found) {
        alert('Nenhum item encontrado!'); // Alerta informando que nenhum item corresponde à pesquisa
    }
});