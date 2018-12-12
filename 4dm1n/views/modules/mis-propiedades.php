<?php
//session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
include "navAdmin.php";
 ?>


<div class="dashboard-list">
    <h3>Lista de Propiedades</h3>
    <table class="manage-table">
        <tbody>
        <?php
          $lista = new MvcController();
          $lista -> ctrListaPropiedades();
          $lista -> ctrBorrarPropiedad();
        ?>
        </tbody>
    </table>
</div>

<?php
include "footer.php";
 ?>