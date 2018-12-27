<?php

class Ingreso{

	public function ingresoController(){

		if(isset($_POST["usuarioIngreso"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"]) &&
				preg_match('/^[A-Za-z0-9\\._-]+@[A-Za-z0-9][A-Za-z0-9-]*(\\.[A-Za-z0-9_-]+)*\\.([A-Za-z]{2,6})$/', $_POST["usuarioIngreso"])){

			   	#$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = array("email"=>$_POST["usuarioIngreso"],
					                     "password"=>$_POST["passwordIngreso"]);

				$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");


				//echo '<script>alert("'.$respuesta["nombre"].' Sopas");</script>';

				if($respuesta['email'] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){


						$_SESSION["validar"] = true;
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["email"] = $respuesta["email"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["foto"] = $respuesta["foto"];
						$_SESSION["perfil"] = $respuesta["perfil"];


					echo '<script>window.location="index.php?action=inicio";</script>';
				}
				else{
					/*echo '<script>alert("'.$respuesta['id'].' Niguas");</script>';
					echo '<script>window.location="index.php";</script>';*/
					echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';
				}




				// $intentos = $respuesta["intentos"];
				// $usuarioActual = $_POST["usuarioIngreso"];
				// $maximoIntentos = 2;

				//if($intentos < $maximoIntentos){

					// if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

					// 	$intentos = 0;

					// 	$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

					// 	$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");





					// 	header("location:index.php?action=inicio");

					// }

					// else{

					// 	++$intentos;

					// 	$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

					// 	$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

					// 	echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';

					//}

				//}

				// else{

				// 		$intentos = 0;

				// 		$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

				// 		$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

				// 		echo '<div class="alert alert-danger">Ha fallado 3 veces, demuestre que no es un robot</div>';

				// }

			}

		}// si se capturo usuarioIngreso

	} // function Ingreso

} //Class