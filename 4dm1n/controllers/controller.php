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
					echo '<script>alert("Dentro :'.$ruta.'");</script>';

				}

				echo '<script>alert("'.$ruta.'");</script>';

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

	#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroUsuarioController(){

		if(isset($_POST["usuario"])){

			$datosController = array( "nombre"=>$_POST["nombre"],
									  "usuario"=>$_POST["usuario"],
								      "password"=>$_POST["password"],
								      "email"=>$_POST["email"],
								      "sistema"=>$_POST["sistema"],
								      "rol"=>$_POST["rol"],
								      "activo"=>$_POST["activo"]);

			$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

			echo $respuesta;

			if($respuesta == "success"){

				//header("location:index.php?action=ok");

			}

			else{

				//header("location:index.php");
			}

		}

	}


	#LISTADO DE CLIENTES
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
                <a href="index.php?action=editEmpleados&idEditar='.$item["id"].'"><i class="fa fa-pencil"></i> Edit</a>
                <a href="index.php?action=mis-usuarios&idBorrar='.$item["id"].'" class="delete"><i class="fa fa-remove"></i> Delete</a>
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



	#VISTA DE USUARIOS
	#------------------------------------

	public function vistaUsuariosController(){

		$respuesta = Datos::vistaUsuariosModel("usuarios");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["password"].'</td>
				<td>'.$item["email"].'</td>
				<td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=usuarios&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
			</tr>';

		}

	}




}
