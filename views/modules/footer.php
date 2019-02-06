<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="views/img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="text">
                        <p>Agregando Valor.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Informaci&oacute;n de contacto</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>km 34.5 Carr. Cuauht&eacute;moc - Alvaro Obreg&oacute;n, Cd. Cuauht&eacute;moc, Chih.
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">info@thiessen.com.mx</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-625-122-8227">+52 625 122 8227</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i><a href="tel:+55-625-122-8289">+52 625 122 8289</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Links de la pagina
                    </h4>
                    <div class="f-border"></div>
                    <ul class="links">
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="propiedades.php">Propiedades</a>
                        </li>
                        <li>
                            <a href="agentes.php">Agentes</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <p class="copy">© 2019 <a href="http://www.thiessen.com.mx">Thiessen Bienes Raices.</a> Todos los derechos reservados.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-list clearfix">
                    <li><a href="https://www.facebook.com/realthiessen/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/realthiessen/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->
        <?php
          ob_start();
          if (is_readable('4dm1n/views/contador.php')) include('4dm1n/views/contador.php');
          else echo "not readable";
          ob_end_clean();
          ob_flush();
          //echo "Visitas: ".$num_visitas;
          ?>