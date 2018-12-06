/**
 *
 * Subir una foto de usuario
 *
 */

$(".upload").change(function(){
	var imagen = this.files[0];
	//console.log(imagen);
	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
		$(".upload").val("");
		swal({
			title: "Error de tipo de imagen",
			text: "El tipo de archivo que eligio no es aceptado",
			type:"error",
			confirmButtonText: "Cerrar"
		});
	}
	else if(imagen["size"] > 2000000){
		$(".upload").val("");
		swal({
			title: "Error de tamaño de imagen",
			text: "La imagen no debe ser mas de 2MB",
			type:"error",
			confirmButtonText: "Cerrar"
		});

	}
	else {
		var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);
		$(datosImagen).on("load", function(event){
			var rutaImagen = event.target.result;
			$(".previsualizar").attr("src", rutaImagen)
		});
	}
});