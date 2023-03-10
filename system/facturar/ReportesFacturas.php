<?php 
class ReportesFacturas{



public function ReporteF($inicio, $fin, $type = NULL) {
		$db = new dbConn();
		$primero = Fechas::Format($inicio);
		$segundo = Fechas::Format($fin);

if($primero == $segundo){
	$sqlx = "fecha = '$inicio'";
} else {
	$sqlx = "time BETWEEN '$primero' AND '$segundo'";
}

if($type == NULL or $type == 0){
  $a = $db->query("SELECT * FROM ticket_num WHERE edo = 1 and $sqlx and td = ".$_SESSION['td']." order by time desc");	
} else {
  $a = $db->query("SELECT * FROM ticket_num WHERE tipo = '$type' and edo = 1 and $sqlx and td = ".$_SESSION['td']." order by time desc");
}

   if ($a->num_rows > 0) {

	  echo '<h3 class="h3-responsive">REPORTE DOCUMENTOS EMITIDOS</h3>
	  <div class="table-responsive text-nowrap">
	  <table class="table table-striped table-sm table-bordered">

		<thead>
	     <tr>
	       <th>Fecha</th>
	       <th>Tipo</th>					       
	       <th>Numero</th>
	       <th>Tipo Pago</th>
	       <th>Cajero</th>
	       <th>Productos</th>
	       <th>Total</th>
	     </tr>
	   </thead>
	   <tbody>';

    foreach ($a as $b) {

$ag = $db->query("SELECT sum(cant), sum(total), cajero, tipo_pago FROM ticket where edo = 1 and num_fac = '".$b["num_fac"]."' and tipo = '".$b["tipo"]."' and td = ".$_SESSION['td']."");
foreach ($ag as $bg) { 
	$cant = $bg["sum(cant)"];
	$total = $bg["sum(total)"];
	$cajero = $bg["cajero"];
	$tipo_pago = $bg["tipo_pago"];
} $ag->close();

	echo '<tr>
		   <th>'.$b["fecha"].' '.$b["hora"].'</th>					       
		   <th>'.Helpers::TipoFacturaVentas($b["tipo"]).'</th>
		   <th>'.$b["num_fac"].'</th>
		   <th>'.Helpers::TipoPago($tipo_pago).'</th>
		   <th>'.$this->CajeroVentas($cajero).'</th>
		   <th>'.$cant.'</th>
		   <th class="text-right">'.Helpers::Dinero($total).'</th>	  
		 </tr>';
    }    

	echo '<tr>
	       <th>Fecha</th>
	       <th>Tipo</th>					       
	       <th>Numero</th>
	       <th>Tipo Pago</th>
	       <th>Cajero</th>
	       <th>Productos</th>
	       <th>Total</th>
		  </tr>';


echo '</tbody>
	</table></div>';


  } $a->close();
		

} // termina la funcion








public function TiposTicketActivos(){ // esta funcion obtiene los ticket activos para mostrarlos como oopciones
		$db = new dbConn();
// a =  ticket. b =  factura, e = Credito fiscal

if($_SESSION["tx"] == 0){

    if ($r = $db->select("ax0, bx0, dx0, ex0", "facturar_opciones", "WHERE td = ".$_SESSION["td"]."")) { 
        $ax = $r["ax0"]; $bx = $r["bx0"]; $dx = $r["dx0"]; $ex = $r["ex0"];
    } unset($r);  

} else {
    
    if ($r = $db->select("ax1, bx1, dx1, ex1", "facturar_opciones", "WHERE td = ".$_SESSION["td"]."")) { 
        $ax = $r["ax1"]; $bx = $r["bx1"]; $dx = $r["dx1"]; $ex = $r["ex1"];
    } unset($r);  
}


echo '<div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" class="custom-control-input" id="0" name="tipo" value="0">
	  <label class="custom-control-label" for="0">Todos</label>
	</div>';

if($ax == 1){
echo '<div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" class="custom-control-input" id="1" name="tipo" value="1">
	  <label class="custom-control-label" for="1">Ticket</label>
	</div>';
}
if($ex == 1){
echo '<div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" class="custom-control-input" id="3" name="tipo" value="3">
	  <label class="custom-control-label" for="3">C. Fiscal</label>
	</div>';
}
if($bx == 1){
echo '<div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" class="custom-control-input" id="2" name="tipo" value="2">
	  <label class="custom-control-label" for="2">Factura</label>
	</div>';
}
if($dx == 1){
echo '<div class="custom-control custom-radio custom-control-inline">
	  <input type="radio" class="custom-control-input" id="4" name="tipo" value="4">
	  <label class="custom-control-label" for="4">Exportaci??n</label>
	</div>';
}


}// termina le funcion




public function CajeroVentas($user) {
		$db = new dbConn();

	if ($r = $db->select("nombre", "login_userdata", 
		"WHERE user = '$user' and td = ".$_SESSION['td']."")) { 
	return $r["nombre"];
	} unset($r);  

}

















} // fin de la clase

 ?>


 