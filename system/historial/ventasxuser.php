<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'application/common/Alerts.php';
include_once 'system/historial/Historial.php';
?>

  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto">
        <form name="form-ventasxuser" method="post" id="form-ventasxuser">
    <input placeholder="Seleccione una fecha" type="text" id="fecha1" name="fecha1" class="form-control datepicker my-2">
    <input placeholder="Seleccione una fecha" type="text" id="fecha2" name="fecha2" class="form-control datepicker my-2">
        <?php
        $historial = new Historial();
        $historial->getUsuariosSelect();
        ?>
    </div>
  </div>


  <div class="row justify-content-md-center">
    <div class="col-12 col-md-auto text-center">
    <button class="btn btn-info my-2 btn-rounded btn-sm waves-effect" type="submit" id="btn-ventasxuser" name="btn-ventasxuser">Mostra Datos</button>
      </form> 
    </div>
  </div>

<div id="contenido" class="mt-5">
</div>