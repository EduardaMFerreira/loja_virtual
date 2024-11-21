function scrollLeft(rowId) {
    const row = document.getElementById(product-row-${rowId});
    row.scrollBy({ left: -300, behavior: 'smooth' });
}

function scrollRight(rowId) {
    const row = document.getElementById(product-row-${rowId});
    row.scrollBy({ left: 300, behavior: 'smooth' });
}