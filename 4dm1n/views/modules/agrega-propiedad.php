<?php
//session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
include "navAdmin.php";
 ?>

<div class="col-sm-12 col-md-6"><h4>Registro de Nueva Propiedad</h4></div>
<div class="submit-address dashboard-list">
    <form action="" method="POST">
        <h4 class="bg-grea-3">Informaci&oacute;n B&aacute;sica</h4>
        <div class="search-contents-sidebar">
            <div class="row pad-20">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="input-text" name="nombre" placeholder="Titulo de la propiedad" required>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="selectpicker search-fields" name="status" required>
                            <option value="Venta">Venta</option>
                            <option value="Renta">Renta</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="input-text" name="precio" placeholder="sin signos, puntos y comas" required>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Habitaciones</label>
                        <select class="selectpicker search-fields" name="habitaciones" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Ba&ntilde;os</label>
                        <select class="selectpicker search-fields" name="banos" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Categor&iacute;a</label>
                        <select class="selectpicker search-fields" name="categoria" required>
                            <option>Departamento</option>
                            <option>Casa</option>
                            <option>Terreno</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Area Terreno</label>
                        <input type="text" class="input-text" name="mtsTerreno" placeholder="Metros Cuadrados">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label>Area Construcci&oacute;n</label>
                        <input type="text" class="input-text" name="mtsConstruccion" placeholder="Metros Cuadrados">
                    </div>
                </div>
            </div>
        </div>
        <h4 class="bg-grea-3">Ubicaci&oacute;n</h4>
        <div class="row pad-20">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Direcci&oacute;n</label>
                    <input type="text" class="input-text" name="direccion"  placeholder="Direcci&oacute;n" required>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" class="input-text" name="ciudad"  placeholder="Ciudad" required>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="form-group">
                    <label>Estado</label>
                    <select class="selectpicker search-fields" name="estado" required>
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
            <div class="col-lg-1 col-md-1 col-sm-12">
                <div class="form-group">
                    <label>C.P.</label>
                    <input type="text" class="input-text" name="CP"  placeholder="CP">
                </div>
            </div>
        </div>
        <h4 class="bg-grea-3">Foto Principal</h4>
        <div class="col-lg-3 col-md-3">
                <div class="edit-profile-photo">
                    <img src="views/img/propiedades/house-icon.png" alt="profile-photo" class="img-fluid previsualizar">
                    <div class="change-photo-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-upload"></i></span>
                            <input type="file" name="imagen" id="imagen" class="upload">
                        </div>
                    </div>
                </div>
            </div>

        <h4 class="bg-grea-3">Informaci&oacute;n Detallada</h4>
        <div class="row pad-20">
            <div class="col-lg-12">
                <textarea class="input-text" name="detalles" placeholder="Mas detalles"></textarea>
            </div>
        </div>
        <h4 class="bg-grea-3">Caracter&iacute;sticas (opcional)</h4>
        <div class="row pad-20">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="estacionamiento" name="estacionamiento" type="checkbox" value="1">
                    <label for="estacionamiento">
                        Estacionamiento
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="AC" type="checkbox" name="AC" value="1">
                    <label for="AC">
                        Aire Acondicionado
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="piscina" type="checkbox" name="piscina" value="1">
                    <label for="piscina">
                        Piscina
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="lavanderia" type="checkbox" name="lavanderia" value="1">
                    <label for="lavanderia">
                        Lavander&iacute;a
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="calefaccion" type="checkbox" name="calefaccion" value="1">
                    <label for="calefaccion">
                        Calefacci&oacute;n Central
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="alarma" type="checkbox" name="alarma" value="1">
                    <label for="alarma">
                        Alarma
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="parque" type="checkbox" name="parque" value="1">
                    <label for="parque">
                        Parque / Areas Verdes
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="ventanas" type="checkbox" name="ventanas" value="1">
                    <label for="ventanas">
                        Ventanas Doble Vidrio
                    </label>
                </div>
            </div>
        </div>
        <h4 class="bg-grea-3">Representante de Ventas</h4>
        <div class="row pad-20">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="input-text" name="agenteID" placeholder="Id del Agente" required>
                </div>
            </div>

        </div>

        <div style="text-align: center;" class="bg-grea-3 col-lg-12 col-md-12 col-sm-12">
            <button type="submit" class="btn btn-md button-theme" name="submit">Guardar</button>
        </div>
    </form>
</div>

<?php
    $crearUsuario = new MvcController();
    $crearUsuario -> ctrCrearPropiedad();
    include "footer.php";
 ?>