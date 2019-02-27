<?php
//session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
include "navAdmin.php";
 ?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-sm-12 col-md-6"><h4>Registrar Nueva Propiedad</h4></div>
<div class="dashboard-list">
    <h3 class="heading">Datos Generales</h3>
    <div class="dashboard-message contact-2 bdr clearfix">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Edit profile photo -->
                <div class="edit-profile-photo">
                    <img src="views/img/propiedades/house-icon.png" alt="profile-photo" class="img-fluid previsualizar">
                    <div class="change-photo-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-upload"></i></span>
                            <input type="file" name="nuevaFoto" class="upload">
                        </div>
                    </div>
                </div>  <!-- foto principal -->

                <br><br><br>

                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="destacada" name="destacada" type="checkbox" value="1">
                        <label for="destacada">
                            Promover Propiedad
                        </label>
                    </div>



            </div>

        <!--     <div class="col-lg-3 col-md-3">
            <style>
              .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
              .fast .toggle-group { transition: left 0.1s; -webkit-transition: left 0.1s; }
              .quick .toggle-group { transition: none; -webkit-transition: none; }
            </style>
            <input type="checkbox" checked data-toggle="toggle" data-style="slow">
            </div> -->

            <div class="col-lg-9 col-md-9">

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group name">
                                <label>Titulo</label>
                                <input required type="text" name="name" class="form-control" placeholder="Nombre completo">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="selectpicker search-fields" name="status">
                                    <option value="Venta">Venta</option>
                                    <option value="Renta">Renta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Precio</label>
                                <input type="text" name="precio" class="form-control" placeholder="Precio de la propiedad">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Habitaciones</label>
                                <select class="selectpicker search-fields" name="habitaciones" >
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Ba&ntilde;os</label>
                                <select class="selectpicker search-fields" name="banos" >
                                    <option value="0">0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Categor&iacute;a</label>
                                <select class="selectpicker search-fields" name="categoria" > <!-- Requerido -->
                                    <option>Departamento</option>
                                    <option>Casa</option>
                                    <option>Terreno</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Area de Terreno &nbsp;&nbsp;&nbsp;( mts<sup>2</sup> )</label>
                                <input type="number" name="mtsTerreno" class="form-control" placeholder="Medidas de Terreno">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Area de Construccion &nbsp;&nbsp;&nbsp;( pies<sup>2</sup> )</label>
                                <input type="number" name="mtsConstruccion" class="form-control" placeholder="Medidas de Construccion">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vendedor Asignado</label>
                                <select class="selectpicker search-fields" name="agenteID" >
                                    <?php $vendedores = new MvcController(); $vendedores -> ctlBuscaVendedores();?>
                                </select>

                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
         <div class="dashboard-list">
    <h4 class="bg-grea-3">Informaci&oacute;n Detallada</h4>
        <div class="row pad-20">
            <div class="col-lg-12">
                <textarea name="detalles" class="form-control" placeholder="Descripcion de la propiedad" rows="6"></textarea>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
         <div class="dashboard-list">
    <h4 class="bg-grea-3">Condiciones de Venta</h4>
        <div class="row pad-20">
            <div class="col-lg-12">
                <textarea name="condVenta" class="form-control" placeholder="Condiciones de Venta" rows="4"></textarea>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="dashboard-list">
            <h3 class="heading">Ubicaci&oacute;n</h3>
            <div class="dashboard-message contact-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>C.P.</label>
                                <input type="number" class="form-control" name="CP"  placeholder="Codigo Postal">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="selectpicker search-fields" name="estado">
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua" selected>Chihuahua</option>
                                    <!--<option value="9">Distrito Federal</option>
                                    <option value="10">Durango</option>
                                    <option value="11">Guanajuato</option>
                                    <option value="12">Guerrero</option>
                                    <option value="13">Hidalgo</option>
                                    <option value="14">Jalisco</option>
                                    <option value="15">México</option>
                                    <option value="16">Michoacán de Ocampo</option>
                                    <option value="17">Morelos</option>
                                    <option value="18">Nayarit</option>
                                    <option value="19">Nuevo León</option>
                                    <option value="20">Oaxaca</option>
                                    <option value="21">Puebla</option>
                                    <option value="22">Querétaro</option>
                                    <option value="23">Quintana Roo</option>
                                    <option value="24">San Luis Potosí</option>
                                    <option value="25">Sinaloa</option>
                                    <option value="26">Sonora</option>
                                    <option value="27">Tabasco</option>
                                    <option value="28">Tamaulipas</option>
                                    <option value="29">Tlaxcala</option>
                                    <option value="30">Veracruz de Ignacio de la Llave</option>
                                    <option value="31">Yucatán</option>
                                    <option value="32">Zacatecas</option>-->
                                </select>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="send-btn">
                <button type="submit" class="btn btn-md button-theme">Registrar Propiedad</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dashboard-list">
            <h3 class="heading">Caracter&iacute;sticas</h3>
            <div class="row pad-20">
                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="estacionamiento" name="estacionamiento" type="checkbox" value="1">
                        <label for="estacionamiento">
                            Estacionamiento
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="AC" type="checkbox" name="AC" value="1">
                            <label for="AC">
                                Aire Acondicionado
                            </label>
                        </div>
                </div>

                <div class="col-md-6">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="piso" type="checkbox" name="piso" value="1">
                            <label for="piso">
                                Calefaccion Piso Radiante
                            </label>
                        </div>
                </div>

                <div class="col-md-6">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="garage" type="checkbox" name="garage" value="1">
                            <label for="garage">
                                Garage
                            </label>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="piscina" type="checkbox" name="piscina" value="1">
                        <label for="piscina">
                            Piscina
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="lavanderia" type="checkbox" name="lavanderia" value="1">
                        <label for="lavanderia">
                            Lavander&iacute;a
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="calefaccion" type="checkbox" name="calefaccion" value="1">
                        <label for="calefaccion">
                            Calefacci&oacute;n Central
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="alarma" type="checkbox" name="alarma" value="1">
                        <label for="alarma">
                            Alarma
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="parque" type="checkbox" name="parque" value="1">
                        <label for="parque">
                            Parque / Areas Verdes
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="ventanas" type="checkbox" name="ventanas" value="1">
                        <label for="ventanas">
                            Ventanas Doble Vidrio
                        </label>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div> <!-- row -->
</form>
<?php
    $crearUsuario = new MvcController();
    $crearUsuario -> ctrCrearProperty();

    include "footer.php";
 ?>