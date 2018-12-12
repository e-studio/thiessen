<?php
	if (!isset($_SESSION)){
        session_start();
    }
?>


<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo -->
                        <a href="index.html">
                            <img src="views/img/logos/black-logo.png" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>Recupere aquí su contraseña</h3>
                        <!-- Form start
                        <form action="index.html" method="GET">-->
                        	<br><br>
                          <form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">

							<div class="col_full">
								<label for="login-form-username">Email:</label>
								<input required="true" type="email" id="usuarioIngreso" name="mailLost" placeholder="Escriba aqui su correo electr&oacute;nico"  class="form-control not-dark" />
							</div>
							<br><br><br><br>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md button-theme btn-block" name="enviaMail">Enviar</button>
                            </div>
							<div class="checkbox">
							    <a href="index.php" class="link-not-important pull-right">volver al login</a>
							    <div class="clearfix"></div>
							</div>

						</form>
                        <?php
                        $envia = Mailer::envia();

                        if( $envia == "ok" ){
								echo '<script>

										swal({

											type: "success",
											title: "¡Se ha enviado un correo con tus datos de acceso!",
											showConfirmButton: true,
											confirmButtonText: "Cerrar"

										}).then(function(result){

											if(result.value){

												window.location = "index.php";

											}

										});


										</script>';
							}
							else if ($envia == "no existe"){
								echo '<script>

										swal({

											type: "error",
											title: "¡No existe un usuario con ese correo, por favor contacte al administrador del sistema!",
											showConfirmButton: true,
											confirmButtonText: "Cerrar"

										}).then(function(result){

											if(result.value){

												//window.location = "index.php";

											}

										});


										</script>';
							}
							else if ($envia == "error al enviar"){
								echo '<script>

										swal({

											type: "error",
											title: "¡El sistema no pudo enviar el correo, intente mas tarde!",
											showConfirmButton: true,
											confirmButtonText: "Cerrar"

										}).then(function(result){

											if(result.value){

												window.location = "index.php";

											}

										});


										</script>';
							}


                        ?>
                    </div>

                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->











<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- <div class="container">
	<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/5.jpg') center center no-repeat; background-size: cover;"></div>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header"><h3>Recupere su contraseña</h3></div>
      <div class="card-body">
      	<form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">

			<div class="col_full">
				<label for="login-form-username">Email:</label>
				<input required="true" type="email" id="usuarioIngreso" name="usuarioIngreso" placeholder="Escriba aqui su correo electr&oacute;nico"  class="form-control not-dark" />
			</div>

			<?php

				//$ingreso = new Ingreso();
				//$ingreso -> ingresoController();

			?>

			<div class="col_full nobottommargin">
				<br>
				<button class="btn btn-primary nomargin" id="login-form-submit" name="login-form-submit" value="login">Enviar</button>
				<a href="index.php" class="pull-right">Volver al Login</a>

		</form>


      </div>
    </div>
  </div> -->








<!--<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/5.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container vertical-middle divcenter clearfix">

						<div class="row center">
							<a href="index.php"><img src="views/img/logo.png" alt="Canvas Logo"></a>
						</div>

						<div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
							<div class="panel-body" style="padding: 40px;">
								<form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">
									<h3>Recupere su contraseña</h3>

									<div class="col_full">
										<label for="login-form-username">Email:</label>
										<input required="true" type="text" id="usuarioIngreso" name="usuarioIngreso" placeholder="Escriba aqui si correo electr&oacute;nico"  class="form-control not-dark" />
									</div>

									<?php

										//$ingreso = new Ingreso();
										//$ingreso -> ingresoController();

									?>

									<div class="col_full nobottommargin">
										<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Enviar</button>
										<a href="index.php" class="fright">Volver al Login</a>

								</form>

							</div>
						</div>

					</div>
				</div>

			</div>

		</section>-->