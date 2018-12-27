<?php
    if (!isset($_SESSION)){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Thiessen - Real Estate | Bienes Raices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="views/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/magnific-popup.css">
    <link rel="stylesheet" href="views/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="views/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="views/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="views/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="views/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="views/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="views/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="views/css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="views/css/skins/green.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="views/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="views/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->

    <!-- SweetAlert 2 -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>

<!--    <!~~ DropZone Images ~~>
    <!~~ <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> ~~>
    <link rel="stylesheet" href="views/css/styles.css">
    <!~~ <script src="https://code.jquery.com/jquery-3.2.1.js"></script> ~~>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="views/js/jquery-ui.min.js"></script>-->



</head>
<body>
<!-- <div class="page_loader"></div> -->

    <?php
        $_SESSION["lostpass"] = true;
        if (isset($_SESSION["validar"]) && $_SESSION["validar"] == true){
            $modulos = new Enlaces();
            $modulos -> enlacesController();
        } else if (isset($_SESSION["lostpass"])){
            $modulos = new Enlaces();
            $modulos -> enlacesController();
        } else {
            include "modules/login.php";
        }
    ?>

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

<!-- script para subir fotos -->
<script  src="views/js/fotos.js"></script>

<script  src="views/js/validarIngreso.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="views/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>