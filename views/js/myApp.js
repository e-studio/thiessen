// Instanciar ambas clases
var latitud =  parseFloat(document.getElementById("latitud").innerHTML);
var longitud =  parseFloat(document.getElementById("longitud").innerHTML);
const direccion =  document.getElementById("direccion").innerHTML;
const precio = document.getElementById("precio").innerHTML;
const titulo = document.getElementById("titulo").innerHTML;


if (isNaN(latitud)) {latitud = 28.406960;}
if (isNaN(longitud)) {longitud = -106.866623;}

console.log(latitud);
console.log(longitud);


const ui = new UI(latitud, longitud);

document.addEventListener('DOMContentLoaded', () => {
     ui.mostrarPines(latitud, longitud);

});

