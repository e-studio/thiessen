<?php

class MvcController{

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){

		if(isset($_POST["email"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["name"]) &&
			   preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST["email"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["new-password"])){

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "views/img/usuarios/usuario.png";

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){


					list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/usuarios";

					if (!file_exists($directorio)) {     // si el directorio no existe lo creamos
						mkdir($directorio, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/usuarios/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/usuarios/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "usuarios";
				$socials = array('Facebook' => $_POST["facebook"], 'Twitter' => $_POST["twitter"], 'LinkedIn' => $_POST["linkedin"]);

				//$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("nombre" => $_POST["name"],
							   "telefono" => $_POST["phone"],
					           "email" => $_POST["email"],
					           "password" => $_POST["new-password"],
					           //"password" => $encriptar,
					           "personal" => $_POST["personal"],
					           "titulo" => $_POST["title"],
					           "perfil" => $_POST["profile"],
					           "foto"=>$ruta,
					           "estado" => "1",
					           "ultimo_login" => 'NULL',
					           "fechaNac" => $_POST["fechaNac"],
					           "sociales" => json_encode($socials));

				$respuesta = Datos::mdlIngresarUsuario($tabla, $datos);


				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=agrega-usuario";

						}

					});


					</script>';


				}


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=agrega-usuario";

						}

					});


				</script>';

			}


		}


	}


	/*=============================================
	REGISTRO DE PROPIEDAD
	=============================================*/

	static public function ctrCrearProperty(){

		if(isset($_POST["name"])){

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "views/img/propiedades/house-icon.png";

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){


					list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
					$nuevoAncho = 730;
					$nuevoAlto = 486;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/propiedades";

					if (!file_exists($directorio)) {     // si el directorio no existe lo creamos
						mkdir($directorio, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/propiedades/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/propiedades/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				} //si se eligio foto

				$tabla = "propiedades";

				$caract = array('estacionamiento' => $_POST["estacionamiento"], 'AC' => $_POST["AC"], 'piscina' => $_POST["piscina"], 'lavanderia' => $_POST["lavanderia"], 'calefaccion' => $_POST["calefaccion"], 'alarma' => $_POST["alarma"], 'parque' => $_POST["parque"], 'ventanas' => $_POST["ventanas"]);
				//echo '<script>alert("Foto :'.$ruta.'");</script>';

				$datos = array("id" => $_POST["id"],
							   "destacada" => $_POST["destacada"],
							   "nombre" => $_POST["name"],
							   "status" => $_POST["status"],
					           "precio" => $_POST["precio"],
					           "mtsTerreno" => $_POST["mtsTerreno"],
					           "mtsConstruccion" => $_POST["mtsConstruccion"],
					           "habitaciones" => $_POST["habitaciones"],
					           "banos" => $_POST["banos"],
					           "categoria" => $_POST["categoria"],
					           "direccion" => $_POST["direccion"],
					           "ciudad" => $_POST["ciudad"],
					           "estado" => $_POST["estado"],
					           "CP" => $_POST["CP"],
					           "detalles" => $_POST["detalles"],
					           "caract" => json_encode($caract),
					           "agenteID" => $_POST["agenteID"],
					           "foto"=>$ruta,
					           "caract" => json_encode($caract));

				$respuesta = Datos::mdlIngresarPropiedad($tabla, $datos);


				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡Datos guardados correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-propiedades";

						}

					});


					</script>';


				}


			else{

				echo '<script>

					swal({

						type: "error",
						title: "¡Error al registrar, Verifique los datos !",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=property";

						}

					});


				</script>';

			}


		}//isset


	} // funcion


	/*=============================================
	ACTUALIZA DATOS DE PROPIEDAD
	=============================================*/

	static public function ctrActProperty(){
		if(isset($_POST["actualiza"])){

			$ruta = $_POST["foto"];

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				//$ruta = $_POST["nuevaFoto"];

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){


				list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
				$nuevoAncho = 730;
				$nuevoAlto = 486;

				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/

				$directorio = "views/img/propiedades";

				if (!file_exists($directorio)) {     // si el directorio no existe lo creamos
					mkdir($directorio, 0755);
				}

				/*=============================================
				DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
				=============================================*/

				if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

					/*=============================================
					GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/

					$aleatorio = mt_rand(100,999);

					$ruta = "views/img/propiedades/".$aleatorio.".jpg";

					$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}

				if($_FILES["nuevaFoto"]["type"] == "image/png"){

					/*=============================================
					GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/

					$aleatorio = mt_rand(100,999);

					$ruta = "views/img/propiedades/".$aleatorio.".png";

					$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}
				//echo '<script>alert("Dentro :'.$ruta.'");</script>';

			} //si se eligio foto

				$tabla = "propiedades";

				$caract = array('estacionamiento' => $_POST["estacionamiento"], 'AC' => $_POST["AC"], 'piscina' => $_POST["piscina"], 'lavanderia' => $_POST["lavanderia"], 'calefaccion' => $_POST["calefaccion"], 'alarma' => $_POST["alarma"], 'parque' => $_POST["parque"], 'ventanas' => $_POST["ventanas"]);

				echo '<script>alert("Destacada :'.$_POST["destacada"].'");</script>';
				if (is_null($_POST["destacada"]) || empty($_POST["destacada"]))
					{
						$dest = 0;
					}
				else {
						$dest=1;
					}
					echo '<script>alert("Destacada :'.$dest.'");</script>';

				$datos = array("id" => $_POST["id"],
							   "destacada" => $dest,
							   "nombre" => $_POST["name"],
							   "status" => $_POST["status"],
					           "precio" => $_POST["precio"],
					           "mtsTerreno" => $_POST["mtsTerreno"],
					           "mtsConstruccion" => $_POST["mtsConstruccion"],
					           "habitaciones" => $_POST["habitaciones"],
					           "banos" => $_POST["banos"],
					           "categoria" => $_POST["categoria"],
					           "direccion" => $_POST["direccion"],
					           "ciudad" => $_POST["ciudad"],
					           "estado" => $_POST["estado"],
					           "CP" => $_POST["CP"],
					           "detalles" => $_POST["detalles"],
					           "caract" => json_encode($caract),
					           "agenteID" => $_POST["agenteID"],
					           "foto"=>$ruta,
					           "caract" => json_encode($caract));

				//var_dump($datos);

				$respuesta = Datos::mdlActualizarPropiedad($tabla, $datos);


				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡Datos guardados correctamente! ",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-propiedades";

						}

					});


					</script>';


				}


			else{

				echo '<script>

					swal({

						type: "error",
						title: "¡Error al registrar, Verifique los datos !",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=property";

						}

					});


				</script>';

			}


		}//isset


	} // funcion



	#LISTADO DE USUARIOS
	#------------------------------------

	public function ctrListaUsuarios(){

		$respuesta = Datos::mdlListaUsuarios("usuarios");

		foreach ($respuesta as $row => $item){

		echo '<tr class="responsive-table">
            <td class="listing-photoo">
                <img src="'.$item["foto"].'" alt="listing-photo" class="img-fluid" width="120">
            </td>
            <td class="title-container">
                <h2><a href="#">'.$item["nombre"].'</a></h2>
                <h5 class="d-none d-xl-block d-lg-block d-md-block">'.$item["email"].'</h5>
                <h6 class="table-property-price">'.$item["telefono"].'</h6>
            </td>
            <td class="expire-date">'.$item["titulo"].'</td>
            <td class="action">
                <a href="index.php?action=edita-usuario&idEditar='.$item["id"].'"><i class="fa fa-pencil"></i> Edit</a>
                <a href="index.php?action=mis-usuarios&idBorrar='.$item["id"].'" class="delete"><i class="fa fa-remove"></i> Delete</a>
            </td>
        </tr>';
		}

	}




	#LISTADO DE PROPIEDADES
	#------------------------------------

	public function ctrListaPropiedades(){

		$respuesta = Datos::mdlListaPropiedades("propiedades");

		foreach ($respuesta as $row => $item){

		echo '<tr class="responsive-table">
            <td class="listing-photoo">
                <img src="'.$item["fotos"].'" alt="listing-photo" class="img-fluid" width="120">
            </td>
            <td class="title-container">
				ID: '.$item["id"].'<br>
                <h2>'.$item["titulo"].'</h2>
                <h5 class="d-none d-xl-block d-lg-block d-md-block">'.$item["direccion"].'</h5>
                <h6 class="table-property-price">'.number_format($item["precio"]).'</h6>
            </td>
            <td class="expire-date">'.$item["status"].'</td>
            <td class="action">
                <a href="index.php?action=edita-propiedad&idEditar='.$item["id"].'"><i class="fa fa-pencil"></i> Edit</a>
                <a href="index.php?action=mis-propiedades&idBorrar='.$item["id"].'" class="delete"><i class="fa fa-remove"></i> Delete</a>
            </td>
        </tr>';
		}

	}


	#BORRAR USUARIO
	#------------------------------------
	public function ctrBorrarEmpleado(){
		if (isset($_GET['idBorrar'])){
			$datosController = $_GET['idBorrar'];
			$respuesta = Datos::mdlBorrarEmpleado($datosController,"usuarios");
			if ($respuesta == "success"){
				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario ha sido borrado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-usuarios";

						}

					});


					</script>';
			}
		}
	}

	#BORRAR PROPIEDAD
	#------------------------------------
	public function ctrBorrarPropiedad(){
		if (isset($_GET['idBorrar'])){
			$datosController = $_GET['idBorrar'];
			$respuesta = Datos::mdlBorrarPropiedad($datosController,"propiedades");
			if ($respuesta == "success"){
				echo '<script>

					swal({

						type: "error",
						title: "¡Se ha sido borrado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-propiedades";

						}

					});


					</script>';
			}
		}
	}

# ACTUALIZA USUARIO
	#------------------------------------

	public function ctlActualizaUsuario(){
		if (isset($_REQUEST['actualiza'])){

			$ruta = $_POST["foto"];

			if(isset($_FILES["nuevaFoto"]["tmp_name"])){


				list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
				$nuevoAncho = 500;
				$nuevoAlto = 500;

				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/

				$directorio = "views/img/usuarios";

				if (!file_exists($directorio)) {     // si el directorio no existe lo creamos
					mkdir($directorio, 0755);
				}

				/*=============================================
				DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
				=============================================*/

				if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

					/*=============================================
					GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/

					$aleatorio = mt_rand(100,999);

					$ruta = "views/img/usuarios/".$aleatorio.".jpg";

					$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}

				if($_FILES["nuevaFoto"]["type"] == "image/png"){

					/*=============================================
					GUARDAMOS LA IMAGEN EN EL DIRECTORIO
					=============================================*/

					$aleatorio = mt_rand(100,999);

					$ruta = "views/img/usuarios/".$aleatorio.".png";

					$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}
				//echo '<script>alert("Dentro :'.$ruta.'");</script>';

			}

			$tabla = "usuarios";
			$socials = array('Facebook' => $_POST["facebook"], 'Twitter' => $_POST["twitter"], 'LinkedIn' => $_POST["linkedin"]);

			//$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datos = array("id" => $_POST["id"],
						   "nombre" => $_POST["name"],
						   "telefono" => $_POST["phone"],
				           "email" => $_POST["email"],
				           "password" => $_POST["new-password"],
				           //"password" => $encriptar,
				           "personal" => $_POST["personal"],
				           "titulo" => $_POST["title"],
				           "perfil" => $_POST["profile"],
				           "foto"=>$ruta,
				           "estado" => "1",
				           "ultimoLogin" => 'NULL',
				           "fechaNac" => $_POST["fechaNac"],
				           "sociales" => json_encode($socials));

			$respuesta = Datos::mdlActualizaUsuario($datos, $tabla);

			//echo "<script type='text/javascript'>alert('$respuesta'); window.location.href='index.php?action=mis-usuarios'</script>";

			if ($respuesta=="ok"){

				echo '<script>

					swal({

						type: "success",
						title: "¡El usuario se actualizó correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-usuarios";

						}

					});


					</script>';
			}
			else{
				echo '<script>

					swal({

						type: "error",
						title: "Error al actualizar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-usuarios";

						}

					});


					</script>';
			}

		}

	}


	/*=============================================
	REGISTRO DE PROPIEDAD NUEVA
	=============================================*/

	public function ctrCrearPropiedad(){
		$target_dir = "views/img/propiedades/";
		$uploadOk = 1;
		$exists="";

	if(isset($_POST["submit"])) {
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		// Check if file already exists
		if (file_exists($target_file)) {
		    $exists = ", already exists.";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded".$exists;
		// if everything is ok, try to upload file
		} else {
		     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		     } else {
		         echo "Sorry, there was an error uploading your file.";
		     }
		}

 	}
	} // funcion




	/*=============================================
	ACTUALIZA DATOS DE PROPIEDAD
	=============================================*/

	public function ctrActualizaPropiedad(){

		if(isset($_POST["actualiza"])){


				/*=============================================
				VALIDAR IMAGEN DE LA PROPIEDAD
				=============================================*/

				//$ruta = "views/img/propiedades/house-icon.png";
				$ruta = $_POST["nuevaFoto"];

				if(isset($_FILES["nuevaFoto"]["tmp_name"])){
					//echo '<script>console_log("Si se puso foto :'.$ruta.'");</script>';


					list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "views/img/propiedades";

					if (!file_exists($directorio)) {     // si el directorio no existe lo creamos
						mkdir($directorio, 0755);
					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/
					console_log($_FILES["nuevaFoto"]["type"]);

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){
						//echo '<script>console_log("es JPG :'.$ruta.'");</script>';

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/propiedades/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){
						//echo '<script>console_log("Es PNG :'.$ruta.'");</script>';

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "views/img/propiedades/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}


				}


			$tabla = "propiedades";

				$caract = array('estacionamiento' => $_POST["estacionamiento"], 'AC' => $_POST["AC"], 'piscina' => $_POST["piscina"], 'lavanderia' => $_POST["lavanderia"], 'calefaccion' => $_POST["calefaccion"], 'alarma' => $_POST["alarma"], 'parque' => $_POST["parque"], 'ventanas' => $_POST["ventanas"]);
				//echo '<script>alert("Foto :'.$ruta.'");</script>';

				$datos = array("id" => $_POST["id"],
							   "nombre" => $_POST["nombre"],
							   "status" => $_POST["status"],
					           "precio" => $_POST["precio"],
					           "mtsTerreno" => $_POST["mtsTerreno"],
					           "mtsConstruccion" => $_POST["mtsConstruccion"],
					           //"password" => $encriptar,
					           "habitaciones" => $_POST["habitaciones"],
					           "banos" => $_POST["banos"],
					           "categoria" => $_POST["categoria"],
					           "direccion" => $_POST["direccion"],
					           "ciudad" => $_POST["ciudad"],
					           "estado" => $_POST["estado"],
					           "CP" => $_POST["CP"],
					           "detalles" => $_POST["detalles"],
					           "caract" => json_encode($caract),
					           "agenteID" => $_POST["agenteID"],

					           "foto"=>$ruta,
					           "estado" => $_POST["estado"],
					           //"fechaNac" => $_POST["fechaNac"],
					           "caract" => json_encode($caract));

				var_dump($datos);

				$respuesta = Datos::mdlActualizarPropiedad($tabla, $datos);


				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡Se ha guardado la informacion correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-propiedades";

						}

					});


					</script>';


				}


			else{

				echo '<script>

					swal({

						type: "error",
						title: "¡No se pudo guardar la informacion!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){

							window.location = "index.php?action=mis-propiedades";

						}

					});


				</script>';

			}


		} //isset actualiza
	} // funcion ctrActualizaPropiedad


}
