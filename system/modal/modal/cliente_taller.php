<?php
    include_once 'application/common/Alerts.php'; 
 ?>
<div class="modal" id="<? echo $_GET["modal"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          ASIGNAR CLIENTE</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->
Cliente:
<div align="center">
  <div class="col-md-12 z-depth-2 justify-content-center">
      <div class="md-form mt-0">
        <form id="c-busquedaA">
        <input class="form-control" type="text" placeholder="Buscar Cliente" aria-label="Search" id="cliente-busquedaA" name="cliente-busquedaA" autofocus>
        </form>
      </div>
  </div>
  <div class="col-md-12 z-depth-2 justify-content-center" id="muestra-busquedaA"></div>
</div>

<div id="ver">
<?php 
if($_SESSION['cliente_asig']){
      $texto = 'Cliente asignado para la Factura: ' . $_SESSION['cliente_asig']. ".";
    Alerts::Mensajex($texto,"danger",'<a id="quitar-clienteA" op="619" class="btn btn-danger btn-rounded">Quitar Cliente</a>',$boton2);

}

 ?>  

<div id="ver_vehiculo_asignado_factura"></div>

</div>
<!-- ./  content -->
      </div>
      <div class="modal-footer">
          <a href="?clientes" class="btn btn-secondary btn-rounded">Agregar Cliente</a>
          <a href="?" class="btn btn-primary btn-rounded">Regresar</a>
    
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->



<div class="modal" id="ModalSelectVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         SELECCIONE UN VEHICULO</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->



<div id="vista_vehiculos"></div>

<!-- ./  content -->
      </div>
      <div class="modal-footer">
   <a id="cerrarmodal" class="btn btn-primary btn-rounded" data-dismiss="modal">Cerrar</a>
   
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->
