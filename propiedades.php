<?php
	include "views/modules/topHead.php";
	require_once "models/buscaModel.php";
	require_once "controllers/buscaController.php";
 ?>
<body>
<div class="page_loader"></div>

<?php include "views/modules/encabezado.php"; ?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Propiedades disponibles</h1>
        </div>
    </div>
</div>
<!-- Sub Banner end -->



<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-11">

                <?php
	                $propiedades = new propiedades();
	                $propiedades -> todasPropiedades();
	            ?>
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->
<!-- ********************************************************************************************************** -->

        </div>
    </div>
</div>


<?php include "views/modules/footer.php"; ?>

<script src="views/js/jquery-2.2.0.min.js"></script>
<script src="views/js/popper.min.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script  src="views/js/bootstrap-submenu.js"></script>
<script  src="views/js/rangeslider.js"></script>
<script  src="views/js/jquery.mb.YTPlayer.js"></script>
<script  src="views/js/bootstrap-select.min.js"></script>
<script  src="views/js/jquery.easing.1.3.js"></script>
<script  src="views/js/jquery.scrollUp.js"></script>
<script  src="views/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="views/js/leaflet.js"></script>
<script  src="views/js/leaflet-providers.js"></script>
<script  src="views/js/leaflet.markercluster.js"></script>
<script  src="views/js/dropzone.js"></script>
<script  src="views/js/slick.min.js"></script>
<script  src="views/js/jquery.filterizr.js"></script>
<script  src="views/js/jquery.magnific-popup.min.js"></script>
<script  src="views/js/jquery.countdown.js"></script>
<script  src="views/js/maps.js"></script>
<script  src="views/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>


<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
crossorigin=""></script>


<script src="views/js/mapas/API.js"></script>
<script src="views/js/mapas/UI.js"></script>
<script src="views/js/mapas/app.js"></script>
</body>
</html>