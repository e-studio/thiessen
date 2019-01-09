<?php
// if (($_FILES["file"]["type"] == "image/jpeg")
//     || ($_FILES["file"]["type"] == "image/png")) {

//     if (move_uploaded_file($_FILES["file"]["tmp_name"], "../../../views/img/propiedades/".$_FILES['file']['name'])) {
//         echo 'si';
//     } else {
//         echo 'no';
//     }
// }



list($ancho, $alto) = getimagesize($_FILES["file"]["tmp_name"]);
$nuevoAncho = 730;
$nuevoAlto = 486;
$ruta = "../../../views/img/propiedades/".$_FILES['file']['name'];
/*=============================================
DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
=============================================*/

if($_FILES["file"]["type"] == "image/jpeg"){

	/*=============================================
	GUARDAMOS LA IMAGEN EN EL DIRECTORIO
	=============================================*/

	//$aleatorio = mt_rand(100,999);

	//$ruta = "views/img/propiedades/".$aleatorio.".jpg";

	$origen = imagecreatefromjpeg($_FILES["file"]["tmp_name"]);

	$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	imagejpeg($destino, $ruta);

}

if($_FILES["file"]["type"] == "image/png"){

	/*=============================================
	GUARDAMOS LA IMAGEN EN EL DIRECTORIO
	=============================================*/

	//$aleatorio = mt_rand(100,999);

	//$ruta = "views/img/propiedades/".$aleatorio.".png";

	$origen = imagecreatefrompng($_FILES["file"]["tmp_name"]);

	$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	imagepng($destino, $ruta);

}
