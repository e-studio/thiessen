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
            <div class="offset-lg-1 col-lg-10">
                <!-- Option bar start
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="properties-list-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-fullwidth.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- Property box 2 start -->


                <?php
	                $propiedades = new propiedades();
	                $propiedades -> todasPropiedades();
	            ?>






                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="properties-list-rightside.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-leftsidebar.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-fullwidth.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="properties-list-rightside.html">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
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


</body>
</html>