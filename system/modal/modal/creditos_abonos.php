<?php
    include_once 'application/common/Alerts.php';
    include_once 'system/credito/Creditos.php';
    $credito = new Creditos(); 

    if ($r = $db->select("nombre", "creditos", "WHERE hash = '".$_REQUEST["cre"]."' and td = ".$_SESSION["td"]."")) { 
        $nombre = $r["nombre"];
    } unset($r);  


?>
<div class="modal" id="<? echo $_GET["modal"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          ABONOS REALIZADOS</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->

<?php  
include_once 'system/corte/Corte.php';
$cut = new Corte();
if($_SESSION["caja_apertura"] != NULL){ // comprobacion de corte
?>


<div class="row">

    <div class="col-md-6" id="origen">
        <form class="text-center border border-light p-2" id="form-abono" name="form-abono"> 

        <input type="hidden" id="credito" name="credito" value="<?php echo $_REQUEST["cre"]; ?>"> 
        <input type="hidden" id="factura" name="factura" value="<?php echo $_REQUEST["factura"]; ?>">
        <input type="hidden" id="tx" name="tx" value="<?php echo $_REQUEST["tx"]; ?>">
        <input type="hidden" id="orden" name="orden" value="<?php echo $_REQUEST["orden"]; ?>">


        <input type="text" id="nombre" name="nombre" autocomplete="off" class="form-control mb-3" placeholder="Cliente" value="<?php echo $nombre; ?>">  
        

        <select class="browser-default custom-select mb-3" id="tipo_pago" name="tipo_pago">
        <option value="1" selected>EFECTIVO</option>
        <option value="2"><?php
        echo strtoupper($_SESSION['root_tarjeta']);
        ?></option>
        </select>


        <input type="number" step="any" id="abono" name="abono" autocomplete="off" class="form-control mb-3" placeholder="0.00">
        <button class="btn btn-info my-2" type="submit" id="btn-abono" name="btn-abono">AGREGAR ABONO</button>
        </form>
    </div>



    <?php 
      $creditos = $credito->ObtenerTotal($_REQUEST["factura"], $_REQUEST["tx"], $_REQUEST["orden"]);
      $abonos = $credito->TotalAbono($_REQUEST["cre"]);
     ?>
    <div class="col-md-6" id="destino">
        <div class="text-center border border-light">
          Total del credito:
          <h3><?php echo Helpers::Dinero($creditos); ?></h3>
        </div>
        <div class="text-center border border-light">
         Total Abonado:
          <h3 id="data-abonos"><?php echo Helpers::Dinero($abonos); ?></h3>
        </div>
        <div class="text-center border border-light text-danger">
         Total pendiente:
          <h3 id="data-total"><?php echo Helpers::Dinero($creditos - $abonos); ?></h3>
        </div>
    </div>
   
</div>

<div id="msj"></div>

<div id="contenido" class="mt-4">
<?php 
$credito->VerAbonos($_REQUEST["cre"]);
?>
</div>


<?php 
} else { /// termina comprobacion de corte
  Alerts::CorteEcho("Abonos");
}
 ?>

<!-- ./  content -->
      </div>
      <div class="modal-footer">

<?php 
$url = "&cre=" . $_REQUEST["cre"] . "&factura=" . $_REQUEST["factura"]. "&tx=" . $_REQUEST["tx"]. "&orden=" . $_REQUEST["orden"];
 ?>
<a href="?modal=cre_prodcuto<?php echo $url; ?>" class="btn btn-secondary btn-rounded">Ver Productos</a>
<a href="?creditos" class="btn btn-primary btn-rounded">Regresar</a>
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->