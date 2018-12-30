<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../extensions/phpmailer/src/PHPMailer.php';
require '../extensions/phpmailer/src/SMTP.php';



$contacto = $_POST["name"];   	//quien envio el correo
$emailContacto = $_POST["email"];	//mail de quien envia
$titulo = $_POST["subject"];
$celular = $_POST["phone"];
$mensaje = $_POST["message"];

$agente = $_POST["agente"];
$emailAgente = $_POST["emailAgente"];

$toemails = array();
$toemails[] = array(
				//'email' => 'peter@thiessen.com.mx', // email de administrador de ordenes vas a informar
				//'name' =>  'Peter Thiessen', // Su nombre
				'email' => $emailAgente,
				'name' => $agente
			);



// Form Processing Messages
$message_success = '<strong>Received !!!</strong><br>';

$mail = new PHPMailer();

$mail->SetFrom( 'info@thiessen.com.mx' , 'Thiessen Real Estate' );
$mail->AddReplyTo( 'noreply@thiessen.com.mx' , 'Thiessen Real Estate' );
foreach( $toemails as $toemail ) {
    $mail->AddAddress( $toemail['email'] , $toemail['name'] );
}

$mail->Subject = $titulo;

$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';


$body = '
<div style="margin-left:150px; padding:50px;width:600px;">
<img src="http://www.thiessen.com.mx/img/logos/black-logo.png" align="left" style="width:447px;height:101px;" alt=""/>
<table width="600" border="0" cellspacing="10" cellpadding="10">
  <tbody style="font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif; color:#070C7F; text-align:left">
    <tr style="background-color:#166518">
      <td style="color:#FFFFFF; text-align:center"><h1>Mensaje de '.$contacto.'</h1></td>
    </tr>
    <tr>
      <td><h2>Un cliente te ha contactado !!</h2></td>
    </tr>
    <tr>
      <td><h3>Mensaje : '.$mensaje.'.</h3></td>
    </tr>
    <tr>
      <td><h3>Puedes contactar a '.$contacto.' al correo '.$emailContacto.' o llamerle al numero <strong>'.$celular.'</strong>.</h3></td>
    </tr>
    <tr>
      <td style="font-size:12px; text-align:center"><p>Este es un mensaje autom&aacute;tico del sitio web <br> Por favor no responda a esta direccion.</p></td>
    </tr>
  </tbody>
</table>

</div>';


$mail->MsgHTML( $body );
$sendEmail = $mail->Send();

if( $sendEmail == true ):
	echo '   <!DOCTYPE html>
			<html lang="zxx">
			<head>
			    <title>Thiessen - Real Estate | Bienes Raices</title>
			     <script src="../views/js/sweetalert2.all.js"></script>
			</head>
			<body>

			<script>

				swal({

					type: "success",
					title: "¡Su mensaje se envió correctamente!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar"

				}).then(function(result){

					if(result.value){

						window.location = "../index.php";

					}

				});


			</script>
		</body>
		</html>';
else:
	echo '
		<!DOCTYPE html>
			<html lang="zxx">
			<head>
			    <title>Thiessen - Real Estate | Bienes Raices</title>
			     <script src="../views/js/sweetalert2.all.js"></script>
			</head>
			<body>
		<script>

			swal({

				type: "error",
				title: "¡Tenemos problemas para enviar su correo, intente mas tarde o verifique su mensaje!",
				showConfirmButton: true,
				confirmButtonText: "Cerrar"

			}).then(function(result){

				if(result.value){

					window.location = "contacto.php";

				}

			});


		</script>
		</body>
		</html>';
endif;

?>