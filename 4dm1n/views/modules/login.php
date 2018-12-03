<!--<div class="container">
  <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: rgba(0, 0, 0, 0.1) url('views/img/home/house.jpg') center center no-repeat; background-size: cover;"></div>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header"><h3>Acceso al sistema</h3></div>
      <div class="card-body">
        <form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">

          <div class="col_full">
        <label for="login-form-username">Usuario:</label>
        <input required="true" type="text" id="usuarioIngreso" name="usuarioIngreso" placeholder="Ingrese su Usuario"  class="form-control not-dark" />
      </div>

      <div class="col_full">
        <label for="login-form-password">Password:</label>
        <input required type="password" id="passwordIngreso" name="passwordIngreso" placeholder="Ingrese su Contraseña" value="" class="form-control not-dark" required="true" />
      </div>

          </div>

          <div class="text-center">
                <button class="btn btn-primary nomargin" id="login-form-submit" name="login-form-submit" value="login">Entrar</button>

      </div>

      <?php

        //$ingreso = new Ingreso();
        //$ingreso -> ingresoController();

      ?>


        </form>
        <div class="text-center">
          <br>

<!~~          <a href="index.php?action=lostPassword" class="fright">Olvid&oacute; su Password?</a>
~~>          <br>
          <br>
        </div>
      </div>
    </div>
  </div>-->


<!-- Contact section start -->
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
                        <h3>Sign into your account</h3>
                        <!-- Form start
                        <form action="index.html" method="GET">-->
                          <form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">
                            <div class="form-group">
                                <input type="text" name="usuarioIngreso" id="usuarioIngreso" class="input-text" placeholder="Email">

                            </div>
                            <div class="form-group">
                                <input type="password" id="passwordIngreso" name="passwordIngreso" class="input-text" placeholder="Password">

                            </div>
                            <div class="checkbox">
                                <a href="forgot-password.html" class="link-not-important pull-right">Olvido su Password</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md button-theme btn-block">login</button>
                            </div>

                            <?php

                            $ingreso = new Ingreso();
                            $ingreso -> ingresoController();

                          ?>
                        </form>

                    </div>

                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->