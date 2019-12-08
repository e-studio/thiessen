// Instanciar ambas clases
var latitud =  parseFloat(document.getElementById("latitud").innerHTML);
var longitud =  parseFloat(document.getElementById("longitud").innerHTML);
const direccion =  document.getElementById("direccion").innerHTML;
const precio = document.getElementById("precio").innerHTML;
const titulo = document.getElementById("titulo").innerHTML;


if (isNaN(latitud)) {latitud = 28.406960;}
if (isNaN(longitud)) {longitud = -106.866623;}

<<<<<<< HEAD
console.log(latitud);
console.log(longitud);

=======
>>>>>>> 513a8ba8f012574c8b4169dedca90f5e85402f90

const ui = new UI(latitud, longitud);

document.addEventListener('DOMContentLoaded', () => {
     ui.mostrarPines(latitud, longitud);

});

