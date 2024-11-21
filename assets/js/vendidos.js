document.querySelectorAll('.conteudo__vendidos__classificacao img').forEach((img) => {
    img.addEventListener('mouseover', () => {
        img.style.transform = 'scale(1.2)';
        img.style.boxShadow = '0 8px 15px rgba(0, 0, 0, 0.3)'; // Adiciona a sombra
    });
    img.addEventListener('mouseout', () => {
        img.style.transform = 'scale(1)';
        img.style.boxShadow = 'none'; // Remove a sombra
    });
});

