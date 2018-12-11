<?php
    if (!isset($_SESSION)){
        session_start();
    }

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
include "navAdmin.php";
 ?>

                        <div class="dashboard-header clearfix"> <!-- ENCABEZADO DEL CONTENIDO -->
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Hola , Rick</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index.html">Index</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>          <!-- END ENCABEZADO DEL CONTENIDO -->
                <!--Tarjetas de Inicio -->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-success">
                                    <div class="left">
                                        <h4>242</h4>
                                        <p>Active Listings</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-warning">
                                    <div class="left">
                                        <h4>1242</h4>
                                        <p>Listing Views</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-active">
                                    <div class="left">
                                        <h4>786</h4>
                                        <p>Reviews</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-dark">
                                    <div class="left">
                                        <h4>42</h4>
                                        <p>Bookmarked</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div> <!--Tarjetas de Inicio -->


                        <div class="row">
                            <!--Aqui va el contenido del Dashborad-->
                        </div>


<?php
include "footer.php";
 ?>
