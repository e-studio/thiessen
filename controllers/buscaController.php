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
                                <img class="d-block w-100" src="4dm1n/'.$item["fotos"].'" alt="properties">
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
                                    <div class="price-box"><span>$850.00</span> Per month</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-pad">
                            <div class="detail">
                                <div class="hdg">
                                    <h3 class="title">
                                        <a href="properties-details.html">'.$item["titulo"].'</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-pin"></i>'.$item["direccion"].', '.$item["estado"].'
                                        </a>
                                    </h5>
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