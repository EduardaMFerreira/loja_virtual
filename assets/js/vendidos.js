// Seleciona todas as imagens dentro da classe '.conteudo__vendidos__classificacao'
document.querySelectorAll('.conteudo__vendidos__classificacao img').forEach((img) => {

    // Adiciona um ouvinte de evento para o evento 'mouseover' (quando o mouse passa sobre a imagem)
    img.addEventListener('mouseover', () => {
        // Aplica um efeito de zoom, aumentando a imagem para 1.2 vezes seu tamanho original
        img.style.transform = 'scale(1.2)';
        // Adiciona uma sombra sutil ao redor da imagem, criando um destaque visual
        img.style.boxShadow = '0 8px 15px rgba(0, 0, 0, 0.3)';
    });
    // Adiciona um ouvinte de evento para o evento 'mouseout' (quando o mouse sai da imagem)
    img.addEventListener('mouseout', () => {
        // Restaura a escala da imagem para o valor original (1), removendo o zoom
        img.style.transform = 'scale(1)';
        // Remove a sombra ao sair do mouse da imagem, retornando ao estilo inicial
        img.style.boxShadow = 'none'; 
    });
});

