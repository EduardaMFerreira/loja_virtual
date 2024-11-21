function scrollLeft(rowId) {
    const row = document.getElementById(`product-row-${rowId}`);
    const scrollAmount = row.offsetWidth / 5 * 2; // Calcula a largura de 2 itens

    // Verifica se já estamos no começo da rolagem
    if (row.scrollLeft > 0) {
        row.scrollLeft -= scrollAmount;
    }
}

function scrollRight(rowId) {
    const row = document.getElementById(`product-row-${rowId}`);
    const scrollAmount = row.offsetWidth / 5 * 2; // Calcula a largura de 2 itens
    row.scrollLeft += scrollAmount;
}
