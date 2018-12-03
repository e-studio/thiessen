<?php

class Ingreso{

	public function ingresoController(){

		if(isset($_POST["usuarioIngreso"])){

			if(preg_match('/^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i', $_POST["usuarioIngreso"])&&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"])){

			   	#$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = array("email"=>$_POST["usuarioIngreso"],"password"=>$_POST["passwordIngreso"]);

				$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");

				echo '<script>alert("'.$respuesta.'");</script>';


			/*	if($respuesta['email'] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){
					echo '<script>alert("'.$_POST["usuarioIngreso"].' Sopas");</script>';
				}
				else{
					echo '<script>alert("'.$respuesta['id'].' Niguas");</script>';
				}




				$intentos = $respuesta["intentos"];
				$usuarioActual = $_POST["usuarioIngreso"];
				$maximoIntentos = 2;

				if($intentos < $maximoIntentos){

					if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

						$intentos = 0;

						$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

						session_start();

						$_SESSION["validar"] = true;
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["rol"] = $respuesta["rol"];
						$_SESSION["sistema"] = $respuesta["sistema"];



						header("location:index.php?action=inicio");

					}

					else{

						++$intentos;

						$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

						echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';

					}

				}

				else{

						$intentos = 0;

						$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

						echo '<div class="alert alert-danger">Ha fallado 3 veces, demuestre que no es un robot</div>';

				}*/

			}

		}
	}

}