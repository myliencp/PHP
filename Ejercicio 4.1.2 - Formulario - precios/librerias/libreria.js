const formatter = new Intl.NumberFormat('es-ES', {
    style: 'currency',
    currency: 'EUR',
    minimumFractionDigits: 2,
});

function saludo(dato){
    alert('hola'+dato);
}