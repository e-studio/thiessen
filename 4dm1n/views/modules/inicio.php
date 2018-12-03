<?php
session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
 ?>


<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index.html">
                <img src="views/img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Menu para moviles-->
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown active">
                        <a href="dashboard.html" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-properties.html" class="nav-link">Propiedades</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-invoices.html" class="nav-link">Agregar Propiedad</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="my-profile.html" class="nav-link">Mi Perfil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.html" class="nav-link">Salir</a>
                    </li>
                </ul>
                <!--End Menu para moviles-->

                <!--Dropdown Izquierda-->
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://placehold.it/45x45" alt="avatar">
                                    Mi Cuenta
                                </a>
                                <div class="dropdown-menu">
                                    <!--<a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="messages.html">Messages</a>
                                    <a class="dropdown-item" href="bookings.html">Bookings</a>-->
                                    <a class="dropdown-item" href="my-profile.html">Mi Perfil</a>
                                    <a class="dropdown-item" href="index.html">Salir</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-theme btn-md" href="submit-property.html">Agregar Propiedad</a>
                        </li>
                    </ul>
                </div>
                <!-- End Dropdown Izquierda-->

            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Principal</h4>
                        <ul>
                            <li class="active"><a href="dashboard.html"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <!--<li><a href="messages.html"><i class="flaticon-mail"></i> Messages <span class="nav-tag">6</span></a></li>
                            <li><a href="bookings.html"><i class="flaticon-calendar"></i> Bookings</a></li>-->
                        </ul>
                        <h4>Listados</h4>
                        <ul>
                            <li><a href="my-properties.html"><i class="flaticon-apartment-1"></i>Propiedades</a></li>
                            <!--<li><a href="my-invoices.html"><i class="flaticon-bill"></i>My Invoices</a></li>
                            <li><a href="favorited-properties.html"><i class="flaticon-heart"></i>Favorited Properties</a></li>-->
                            <li><a href="submit-property.html"><i class="flaticon-plus"></i>Agregar Propiedad</a></li>
                        </ul>
                        <h4>Cuenta</h4>
                        <ul>
                            <li><a href="my-profile.html"><i class="flaticon-people"></i>Mi Perfil</a></li>
                            <li><a href="index.html"><i class="flaticon-logout"></i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
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
                        </div>
                        <!--
                           Alertas de Inicio de sesion
                        <div class="alert alert-success alert-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
                        </div>-->

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
                        </div>
                        <div class="row">
                            <!--Aqui va el contenido del Dashborad-->
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 Thiessen Real Estate | Bienes Raices.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashbord end -->