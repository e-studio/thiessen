<?php

class propiedades{

    public function detallePropiedad($propiedad){
        $item = buscaModels::buscaDetallePropiedad($propiedad, "propiedades");

        $caract = json_decode($item["caracteristicas"], true);
        $social = json_decode($item["sociales"], true);

        echo '<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Heading properties 3 start -->
                <div class="heading-properties-3">
                    <h1>'.$item["titulo"].'</h1>
                    <div class="mb-30"><span class="property-price">$'.number_format($item["precio"]).'</span> <span class="rent">'.$item["status"].'</span> <span class="location"><i class="flaticon-pin"></i>'.$item["direccion"].', '.$item["ciudad"].', '.$item["estado"].' </span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- main slider carousel items -->
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="4dm1n/'.$item["fotos"].'" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="http://placehold.it/730x486" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="http://placehold.it/730x486" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="http://placehold.it/730x486" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="http://placehold.it/730x486" class="img-fluid" alt="slider-properties">
                        </div>

                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="4dm1n/'.$item["fotos"].'" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                <img src="http://placehold.it/146x97" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                <img src="http://placehold.it/146x97" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                <img src="http://placehold.it/146x97" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                <img src="http://placehold.it/146x97" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                    </ul>
                    <!-- main slider carousel items -->
                </div>

                <!-- Properties description start -->
                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Descripci&oacute;n
                    </h3>
                    <p>'.$item["detalles"].'</p>
                </div>


                <!-- Properties amenities start -->';

                $i =0;
                foreach ($caract as $key => $value){
                    if($value != null ) $i++;
                }

                if ($i>0){

                echo'<div class="properties-amenities mb-40">
                    <h3 class="heading-2">
                        Caracteristicas Adicionales
                    </h3>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <ul class="amenities">';

                            foreach ($caract as $key => $value){
                                    if($value != null ){
                                    echo '<li>
                                            <i class="fa fa-check"></i>'.$key.'
                                        </li>';
                                    }
                                };

                            echo '
                            </ul>
                        </div>
                    </div>
                </div>';
                } // if $i>0

                echo'<!-- Floor plans start -->
                <div class="floor-plans mb-50">
                    <h3 class="heading-2">Distribuci&oacute;n</h3>
                    <table>
                        <tbody><tr>
                            <td><strong>Terreno</strong></td>
                            <td><strong>Construcci&oacute;n</strong></td>
                            <td><strong>Habitaciones</strong></td>
                            <td><strong>Ba&ntilde;os</strong></td>

                        </tr>
                        <tr>
                            <td>'.$item["areaTerreno"].'</td>
                            <td>'.$item["areaConstruccion"].'</td>
                            <td>'.$item["habitaciones"].'</td>
                            <td>'.$item["banos"].'</td>
                        </tr>
                        </tbody>
                    </table>
                    <img src="4dm1n/'.$item["fotos"].'" alt="floor-plans" class="img-fluid">
                </div>
             </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Our agent sidebar start -->
                    <div class="our-agent-sidebar">
                        <div class="p-20">
                            <h3 class="sidebar-title">Agente que te puede atender</h3>
                            <div class="s-border"></div>
                        </div>
                        <div id="carouselExampleIndicators5" class="carousel slide text-center" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="team-1">
                                        <div class="team-photo">
                                            <a href="#">
                                                <img src="4dm1n/'.$item["foto"].'" alt="agent-2" class="img-fluid">
                                            </a>
                                            <ul class="social-list clearfix">';
                                            if ($social["Facebook"] != "") echo '<li><a href="'.$social["Facebook"].'" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>';
                                            if ($social["Twitter"] != "") echo '<li><a href="'.$social["Twitter"].'" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>';
                                            if ($social["LinkedIn"] != "") echo '<li><a href="'.$social["LinkedIn"].'" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>';

                                            echo'</ul>
                                        </div>
                                        <div class="team-details">
                                            <h5><a href="detalles-agente.php?id='.$item["idAgente"].'">'.$item["nombre"].'</a></h5>
                                            <h6>'.$item["puesto"].'</h6>
                                            ';
                                        if ($item["telefono"] != "") echo '<i class="flaticon-phone"></i><a href="tel:+52'.$item["telefono"].'"> +52 '.$item["telefono"].'</a>';
                                        echo '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- sidebar right -->
            </div><!-- class col-lg-4 -->
        </div>
    </div>
</div>
<!-- Properties details page end -->';
    }





	public function listaPropiedades(){

		$respuesta = buscaModels::buscaPropiedades("propiedades");
		foreach ($respuesta as $row => $item){

			echo '<div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Reciente</span>
                                </div>
                                <div class="price-box"><span>$'.number_format($item["precio"]).'</span></div>
                                <img class="d-block w-100" src="4dm1n/'.$item["fotos"].'" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                         ID: '.$item["id"].'<br>
                            <h1 class="title">
                                <a href="detalles-propiedad.php?id='.$item["id"].'">'.$item["titulo"].'</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>'.$item["direccion"].',
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Constr.</span>'.$item["areaConstruccion"].'
                                    </li>
                                    <li>
                                        <span>Habitaciones</span> '.$item["habitaciones"].'
                                    </li>
                                    <li>
                                        <span>Ba&ntilde;os</span> '.$item["banos"].'
                                    </li>
                                    <li>
                                        <span>Tipo</span> '.$item["status"].'
                                    </li>
                                </ul><div><br><br></div>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>'.$item["fechaRegistro"].'
                            </span>
                        </div>
                    </div>
                </div>';

		}

	}

public function todasPropiedades(){

        $respuesta = buscaModels::buscaPropiedades("propiedades");
        foreach ($respuesta as $row => $item){

            echo'<div class="property-box-2" >
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <img src="4dm1n/'.$item["fotos"].'" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-box"><span>$'.number_format($item["precio"]).'</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-pad">
                            <div class="detail">
                                <div class="hdg">
                                   ID: '.$item["id"].'<br>
                                    <h1 class="title">
                                        <a href="detalles-propiedad.php?id='.$item["id"].'">'.$item["titulo"].'</a>
                                    </h1>

                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-pin"></i>'.$item["direccion"].', '.$item["estado"].'
                                        </a>
                                    </h5>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Construcci&oacute;n</span>'.$item["areaConstruccion"].'
                                    </li>
                                    <li>
                                        <span>Terreno</span>'.$item["areaTerreno"].'
                                    </li>
                                    <li>
                                        <span>Habitaciones</span> '.$item["habitaciones"].'
                                    </li>
                                    <li>
                                        <span>Ba&ntilde;os</span> '.$item["banos"].'
                                    </li>
                                    <li>
                                        <span>Tipo</span> '.$item["status"].'
                                    </li>
                                </ul><div><br><br></div>
                                <div class="footer">
                                    <a href="#" tabindex="0">
                                        <i class="flaticon-people"></i> Jhon Doe
                                    </a>
                                    <span>
                                          <i class="flaticon-calendar"></i>'.$item["fechaRegistro"].'
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div>  <!-- property-box-2 -->';

    }

}

} //class

class agentes{

    public function slideAgentes(){

        $respuesta = buscaModels::buscaAgentes("usuarios");
        foreach ($respuesta as $row => $item){
            $social = json_decode($item["sociales"], true);
            echo '<div class="slick-slide-item">
                    <div class="row team-2">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad">
                            <div class="photo">
                                <img src="4dm1n/'.$item["foto"].'" alt="avatar-10" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad bg align-self-center">
                            <div class="detail">
                                <h4>
                                    <a href="detalles-agente.php?id='.$item["id"].'">'.$item["nombre"].'</a>
                                </h4>
                                <h5>'.$item["titulo"].'</h5>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <i class="flaticon-mail"></i><a href="mailto:'.$item["email"].'">'.$item["email"].'</a>
                                        </li>
                                        <li>';
                                        if ($item["telefono"] != "") echo '<i class="flaticon-phone"></i><a href="tel:+52'.$item["telefono"].'"> +52 '.$item["telefono"].'</a>';
                                        echo '
                                        </li>
                                    </ul>
                                </div>

                                <ul class="social-list clearfix">';

                                if ($social["Facebook"] != "") echo '<li><a href="'.$social["Facebook"].'" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>';
                                if ($social["Twitter"] != "") echo '<li><a href="'.$social["Twitter"].'" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>';
                                if ($social["LinkedIn"] != "") echo '<li><a href="'.$social["LinkedIn"].'" target="_blank" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>';

                                echo'</ul>
                            </div>
                        </div>
                    </div>
                </div>';

        }

    } //listaAgentes


    public function todosAgentes(){

        $respuesta = buscaModels::buscaAgentes("usuarios");
        foreach ($respuesta as $row => $item){
            $social = json_decode($item["sociales"], true);
            echo'<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row team-2">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad ">
                        <div class="photo">
                            <a href="detalles-agente.php?id='.$item["id"].'"><img src="4dm1n/'.$item["foto"].'" alt="avatar-9" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4>
                                <a href="detalles-agente.php?id='.$item["id"].'">'.$item["nombre"].'</a>
                            </h4>
                            <h5>Creative Director</h5>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a>'.$item["titulo"].'</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-mail"></i><a href="mailto:'.$item["email"].'">'.$item["email"].'</a>
                                    </li>
                                    <li>';
                                        if ($item["telefono"] != "") echo '<i class="flaticon-phone"></i><a href="tel:+52'.$item["telefono"].'"> +52 '.$item["telefono"].'</a>';
                                        echo '
                                    </li>
                                </ul>
                            </div>

                            <ul class="social-list clearfix">';

                                if ($social["Facebook"] != "") echo '<li><a href="'.$social["Facebook"].'" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>';
                                if ($social["Twitter"] != "") echo '<li><a href="'.$social["Twitter"].'" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>';
                                if ($social["LinkedIn"] != "") echo '<li><a href="'.$social["LinkedIn"].'" target="_blank" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>';

                                echo'</ul>
                        </div>
                    </div>
                </div>
            </div>';

        }

    }


    public function detalleAgente($agente){
        $item = buscaModels::buscaDetalleAgente($agente, "usuarios");
        $social = json_decode($item["sociales"], true);

        echo '<!-- Heading -->
        <h1 class="heading-2">Informaci&oacute;n de tu Agente</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="row team-2">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad ">
                        <div class="photo">
                            <img src="4dm1n/'.$item['foto'].'" alt="avatar-9" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad align-self-center bg">
                        <div class="detail">
                            <h4>
                                '.$item['nombre'].'
                            </h4>
                            <h5>'.$item['titulo'].'</h5>
                            <div class="contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-mail"></i><a href="mailto:'.$item['email'].'">'.$item['email'].'</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i><a href="tel:'.$item['telefono'].'"> '.$item['telefono'].'</a>
                                    </li>
                                </ul>
                            </div>

                            <ul class="social-list clearfix">';

                                if ($social["Facebook"] != "") echo '<li><a href="'.$social["Facebook"].'" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>';
                                if ($social["Twitter"] != "") echo '<li><a href="'.$social["Twitter"].'" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>';
                                if ($social["LinkedIn"] != "") echo '<li><a href="'.$social["LinkedIn"].'" target="_blank" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>';

                           echo' </ul>
                        </div>
                    </div>
                </div>
                <div class="agent-biography">
                    <h3 class="heading-2">Biograf&iacute;a</h3>
                    <p>'.$item['personal'].'</p>
                    <br>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="sidebar-right">
                    <!-- Contact 2 start -->
                    <div class="contact-2 widget">
                        <h3 class="sidebar-title">Mensaje Directo</h3>
                        <div class="s-border"></div>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="rowo">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Tu Nombre" required>
                                </div>
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Telefono" required>
                                </div>
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Mensaje" required></textarea >
                                </div>
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md button-theme btn-block">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   <!-- col-l4-4 -->
        </div>';
    }





}