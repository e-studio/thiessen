function validarIngreso(){
	return true;
}

var bOrden = 0; // variable para capturar la orden que quiero borrar

// este metodo recibe el nombre del boton borrar que se precionó en la lista de ordenes,
// cada boton tiene como nombre el numero de orden al que le pertenece, para identificar cual orden quiero borrar
$('#deleteModal').on('show.bs.modal', function(e) {
    bOrden = $(e.relatedTarget).data('borrar');

});
function borraOrden(){
        document.getElementById(bOrden).click();

}