<!-- Banner start -->
<?php
// desordena los numero del 1 al 6 y los pone en un array $rand para mostrar diferentes fotos en el banner
// cada vez que se accese la pagina
$rand = range(1, 6);
shuffle($rand);
?>


<div class="banner banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="4dm1n/views/img/banner/house<?php  echo $rand[0]; ?>.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h1>Agregando Valor</h1>
                            <p>
                                Encuentra tu nueva casa con nosotros
                            </p>
                            <a href="propiedades.php" class="btn btn-lg btn-theme">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="4dm1n/views/img/banner/house<?php  echo $rand[1]; ?>.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-right">
                            <h1>Tu futuro hogar esta aqu&iacute;</h1>
                            <p>
                                Encuentra tu nueva casa con nosotros
                            </p>
                            <a href="#" class="btn btn-lg btn-theme">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="4dm1n/views/img/banner/house<?php  echo $rand[2]; ?>.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-left">
                            <h1>Thiessen | Bienes Raices</h1>
                            <p>
                                Conoce nuestro agentes de ventas
                            </p>
                            <a href="agentes.php" class="btn btn-lg btn-theme">Conocer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>

    <!-- Search Section start -->
    <div class="search-section d-none d-xl-block d-lg-block" id="search-style-2">
        <div class="container">

            <div class="search-section-area ssa2">
                <h4>Busqueda Avanzada</h4>
                <div class="search-area-inner">
                    <div class="search-contents">
                         <form action="busqueda.php" method="POST">
                            <div class="row">
                                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="form-area">
                                            <option>Form Area</option>
                                            <option>800</option>
                                            <option>1000</option>
                                            <option>1200</option>
                                            <option>1400</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="status">
                                            <option>Venta</option>
                                            <option>Renta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="tipo">
                                            <option>Casas</option>
                                            <option>Terrenos</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="recamaras">
                                            <option>Recamaras</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="banos">
                                            <option>Ba&ntilde;os</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="estado">
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua" selected>Chihuahua</option>
                                            <!--<option value="9">Distrito Federal</option>
                                            <option value="10">Durango</option>
                                            <option value="11">Guanajuato</option>
                                            <option value="12">Guerrero</option>
                                            <option value="13">Hidalgo</option>
                                            <option value="14">Jalisco</option>
                                            <option value="15">México</option>
                                            <option value="16">Michoacán de Ocampo</option>
                                            <option value="17">Morelos</option>
                                            <option value="18">Nayarit</option>
                                            <option value="19">Nuevo León</option>
                                            <option value="20">Oaxaca</option>
                                            <option value="21">Puebla</option>
                                            <option value="22">Querétaro</option>
                                            <option value="23">Quintana Roo</option>
                                            <option value="24">San Luis Potosí</option>
                                            <option value="25">Sinaloa</option>
                                            <option value="26">Sonora</option>
                                            <option value="27">Tabasco</option>
                                            <option value="28">Tamaulipas</option>
                                            <option value="29">Tlaxcala</option>
                                            <option value="30">Veracruz de Ignacio de la Llave</option>
                                            <option value="31">Yucatán</option>
                                            <option value="32">Zacatecas</option>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <button type="submit" name="buscar" class="search-button">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Banner end -->


    <?php

?>