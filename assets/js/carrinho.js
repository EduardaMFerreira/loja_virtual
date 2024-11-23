// Seleciona todos os botões de adicionar ao carrinho
const addToCartButtons = document.querySelectorAll('.add-to-cart');

// Adiciona um listener de clique para cada botão
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Adiciona a classe "clicked" ao botão clicado
        button.classList.add('clicked');
    });
});
