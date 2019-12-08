<?php
	include "views/modules/topHead.php";
	require_once "models/buscaModel.php";
	require_once "controllers/buscaController.php";

    $propiedad = $_REQUEST['id'];
 ?>
<body>
<div class="page_loader"></div>

<?php include "views/modules/encabezado.php"; ?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Detalles de Propiedades</h1>
        </div>
    </div>
</div>
<!-- Sub Banner end -->


<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <div class="row">


    	 	<?php
                $propiedades = new propiedades();
                $propiedades -> detallePropiedad($propiedad);
            ?>

        </div>
    </div>
</div>


<?php include "views/modules/footer.php"; ?>

<!-- External JavaScripts
    =============================================
    <script src="archivosGaleria/jquery.js"></script>
    <script src="archivosGaleria/plugins.js"></script>-->

    <!-- Footer Scripts
    =============================================
    <script src="archivosGaleria/functions.js"></script>-->


<script src="views/js/jquery-2.2.0.min.js"></script>
<script src="views/js/bootstrap.min.js"></script><
<script  src="views/js/jquery.scrollUp.js"></script>

<script  src="views/js/jquery.magnific-popup.min.js"></script>
<<<<<<< HEAD
<script  src="views/js/app.js"></script>
=======
<script  src="views/js/app.js"></script> 
>>>>>>> 513a8ba8f012574c8b4169dedca90f5e85402f90

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>


<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
crossorigin=""></script>
<script src="views/js/UI.js"></script>
<script src="views/js/myApp.js"></script>

</body>
</html>