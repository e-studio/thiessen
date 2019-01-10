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
    <!--<div class="search-section d-none d-xl-block d-lg-block" id="search-style-2">
        <div class="container">
            <div class="search-section-area ssa2">
                <div class="search-area-inner">
                    <div class="search-contents">
                         <form method="GET">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="form-area">
                                            <option>Form Area</option>
                                            <option>800</option>
                                            <option>1000</option>
                                            <option>1200</option>
                                            <option>1400</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="any-status">
                                            <option>Any Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="all-type">
                                            <option>All Type</option>
                                            <option>Apartments</option>
                                            <option>Shop</option>
                                            <option>Restaurant</option>
                                            <option>Villa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
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
                                        <select class="selectpicker search-fields" name="bathrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="location">
                                            <option>location</option>
                                            <option>United States</option>
                                            <option>American Samoa</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
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
                                        <button class="search-button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div><!-- Banner end -->


    <?php

?>