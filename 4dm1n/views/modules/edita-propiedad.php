<?php
//session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}

$propiedad = $_REQUEST['idEditar'];
$busqueda = Datos::mdlBuscaPropiedad($propiedad, "propiedades");
$caract = json_decode($busqueda["caracteristicas"], true);

include "navAdmin.php";
 ?>
<form action="" method="POST" enctype="multipart/form-data">

    <input type="text" class="input-text" value="<?php echo $propiedad; ?>" name="id" hidden>
    <input required type="text" name="foto" value="<?php echo $busqueda['fotos']; ?>" hidden>

<div class="col-sm-12 col-md-6"><h4>Editar Datos de Propiedad</h4></div>
<div class="dashboard-list">
    <h3 class="heading">Datos Generales</h3>
    <div class="dashboard-message contact-2 bdr clearfix">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Edit profile photo -->
                <div class="edit-profile-photo">
                    <img src="<?php echo $busqueda["fotos"]; ?>" alt="profile-photo" class="img-fluid previsualizar">
                    <div class="change-photo-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-upload"></i></span>
                            <input type="file" name="nuevaFoto" class="upload">
                        </div>
                    </div>
                </div>  <!-- foto principal -->

                <br><br><br>

                    <div class="checkbox checkbox-theme checkbox-circle">
                     <input id="destacada" type="checkbox" name="destacada" value="1" <?php if ($busqueda['destacada']=="1") echo 'checked'; ?>>
                        <label for="destacada">
                            Promover Propiedad
                        </label>
                    </div>

            </div>

            <div class="col-lg-9 col-md-9">

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group name">
                                <label>Titulo</label>
                                <input required type="text" name="name" class="form-control" placeholder="Titulo de la propiedad" value="<?php echo $busqueda["titulo"]; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Tipo</label>
                                <select class="selectpicker search-fields" name="status">
                                    <option value="Venta" <?php if ($busqueda['status']=="Venta") echo 'selected'; ?> >Venta</option>
                                    <option value="Renta" <?php if ($busqueda['status']=="Renta") echo 'selected'; ?> >Renta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Precio</label>
                                <input type="text" name="precio" class="form-control" placeholder="Precio de la propiedad" value="<?php echo $busqueda["precio"]; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Habitaciones</label>
                                <select class="selectpicker search-fields" name="habitaciones" >
                                    <option value="0" <?php if ($busqueda['habitaciones']==0) echo 'selected'; ?> >0</option>
                                    <option value="1" <?php if ($busqueda['habitaciones']==1) echo 'selected'; ?> >1</option>
                                    <option value="2" <?php if ($busqueda['habitaciones']==2) echo 'selected'; ?> >2</option>
                                    <option value="3" <?php if ($busqueda['habitaciones']==3) echo 'selected'; ?> >3</option>
                                    <option value="4" <?php if ($busqueda['habitaciones']==4) echo 'selected'; ?> >4</option>
                                    <option value="5" <?php if ($busqueda['habitaciones']==5) echo 'selected'; ?> >5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Ba&ntilde;os</label>
                                <select class="selectpicker search-fields" name="banos" >
                                    <option value="0" <?php if ($busqueda['banos']==0) echo 'selected'; ?> >0</option>
                                    <option value="1" <?php if ($busqueda['banos']==1) echo 'selected'; ?> >1</option>
                                    <option value="2" <?php if ($busqueda['banos']==2) echo 'selected'; ?> >2</option>
                                    <option value="3" <?php if ($busqueda['banos']==3) echo 'selected'; ?> >3</option>
                                    <option value="4" <?php if ($busqueda['banos']==4) echo 'selected'; ?> >4</option>
                                    <option value="5" <?php if ($busqueda['banos']==5) echo 'selected'; ?> >5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Categor&iacute;a</label>
                                <select class="selectpicker search-fields" name="categoria" > <!-- Requerido -->
                                    <option <?php if ($busqueda['categoria']=="Departamento") echo 'selected'; ?> >Departamento</option>
                                    <option <?php if ($busqueda['categoria']=="Casa") echo 'selected'; ?> >Casa</option>
                                    <option <?php if ($busqueda['categoria']=="Terreno") echo 'selected'; ?> >Terreno</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Area de Terreno</label>
                                <input type="number" name="mtsTerreno" class="form-control" placeholder="Mts Terreno" value="<?php echo $busqueda["areaTerreno"]; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Area de Construccion</label>
                                <input type="number" name="mtsConstruccion" class="form-control" placeholder="Mts Construccion" value="<?php echo $busqueda["areaConstruccion"]; ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vendedor Asignado</label>
                                <input type="number" class="form-control" name="agenteID"  placeholder="Agente que vende esta prop." value="<?php echo $busqueda["vendedor"]; ?>">
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
                <textarea name="detalles" class="form-control" placeholder="Descripcion de la propiedad"><?php echo $busqueda["detalles"]; ?></textarea>
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
                                <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?php echo $busqueda["direccion"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?php echo $busqueda["ciudad"]; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>C.P.</label>
                                <input type="number" class="form-control" name="CP"  placeholder="Codigo Postal" value="<?php echo $busqueda["CP"]; ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="selectpicker search-fields" name="estado">
                                    <option value="Aguascalientes" <?php if ($busqueda['estado']=="Aguascalientes") echo 'selected'; ?> >Aguascalientes</option>
                                    <option value="Baja California" <?php if ($busqueda['estado']=="Baja California") echo 'selected'; ?> >Baja California</option>
                                    <option value="Baja California Sur" <?php if ($busqueda['estado']=="Baja California Sur") echo 'selected'; ?> >Baja California Sur</option>
                                    <option value="Campeche" <?php if ($busqueda['estado']=="Campeche") echo 'selected'; ?> >Campeche</option>
                                    <option value="Coahuila de Zaragoza" <?php if ($busqueda['estado']=="Coahuila de Zaragoza") echo 'selected'; ?> >Coahuila de Zaragoza</option>
                                    <option value="Colima" <?php if ($busqueda['estado']=="Colima") echo 'selected'; ?> >Colima</option>
                                    <option value="Chiapas" <?php if ($busqueda['estado']=="Chiapas") echo 'selected'; ?> >Chiapas</option>
                                    <option value="Chihuahua" <?php if ($busqueda['estado']=="Chihuahua") echo 'selected'; ?> >Chihuahua</option>
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
            <div  class="send-btn">
                <button type="submit" name="actualiza" class="btn btn-md button-theme">Actualizar Datos</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dashboard-list">
            <h3 class="heading">Caracter&iacute;sticas</h3>
            <div class="row pad-20">
                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="estacionamiento" name="estacionamiento" type="checkbox" value="1" <?php if ($caract['estacionamiento']=="1") echo 'checked'; ?>>
                        <label for="estacionamiento">
                            Estacionamiento
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="AC" type="checkbox" name="AC" value="1" <?php if ($caract['AC']=="1") echo 'checked'; ?>>
                            <label for="AC">
                                Aire Acondicionado
                            </label>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="piscina" type="checkbox" name="piscina" value="1" <?php if ($caract['piscina']=="1") echo 'checked'; ?>>
                        <label for="piscina">
                            Piscina
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="lavanderia" type="checkbox" name="lavanderia" value="1" <?php if ($caract['lavanderia']=="1") echo 'checked'; ?>>
                        <label for="lavanderia">
                            Lavander&iacute;a
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="calefaccion" type="checkbox" name="calefaccion" value="1" <?php if ($caract['calefaccion']=="1") echo 'checked'; ?>>
                        <label for="calefaccion">
                            Calefacci&oacute;n Central
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="alarma" type="checkbox" name="alarma" value="1" <?php if ($caract['alarma']=="1") echo 'checked'; ?>>
                        <label for="alarma">
                            Alarma
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="parque" type="checkbox" name="parque" value="1" <?php if ($caract['parque']=="1") echo 'checked'; ?>>
                        <label for="parque">
                            Parque / Areas Verdes
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="ventanas" type="checkbox" name="ventanas" value="1" <?php if ($caract['ventanas']=="1") echo 'checked'; ?>>
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
    $crearUsuario -> ctrActProperty();

    include "footer.php";
 ?>