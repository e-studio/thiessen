<?php

class propiedades{

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
                                <img class="d-block w-100" src="'.$item["fotos"].'" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                         ID: '.$item["id"].'<br>
                            <h1 class="title">
                                <a href="properties-details.html">'.$item["titulo"].'</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>'.$item["direccion"].',
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
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
}

class agentes{

    public function listaAgentes(){

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
                                    <a href="agent-detail.html">'.$item["nombre"].'</a>
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

    }
}