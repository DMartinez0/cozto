<?php 
class Laterales{

	public function __construct() { 
 	} 



 	public function VerLateral($cotizacion){
 		$db = new dbConn();

 		if($cotizacion != NULL){

		$this->MostrarTotal($cotizacion);
		$this->MostrarBotones($cotizacion);

 		}	else {
		echo '<div class="text-center"><img src="assets/img/logo/'.$_SESSION['config_imagen'].'" class="img-fluid responsive" alt="Responsive image"></div>';
		}
 	}


 	public function MostrarTotal($cotizacion){ // totales de la orden
 		$db = new dbConn();


 		echo '<div class="card-deck text-center">
			    <!--Panel-->
			    <div class="card">
			        <div class="card-body">
			            <h4 class="card-title">TOTAL '. $_SESSION['config_moneda_simbolo'] .'</h4>
			            <p class="black-text display-3"> '. $this->ObtenerTotal($cotizacion) .'</p>
			        </div>
			    </div>
			</div>';
			echo '<hr>';


 	}




 	public function MostrarBotones($cotizacion){ // botones de funcion para la venta
 		echo '<div align="center" class="justify-content-center">';
 		echo '<button id="guardar" cotizacion="'.$cotizacion.'" op="157" class="btn btn-outline-primary btn-rounded waves-effect"><i class="fas fa-save mr-1"></i> Guardar</button>';
 		//echo '<button class="btn btn-outline-danger btn-rounded waves-effect"><i class="fas fa-ban mr-1"></i> Cancelar</button>';
 		echo '<a id="cancelar" op="158" class="btn btn-outline-red btn-rounded waves-effect"><i class="fas fa-ban mr-1"></i> Eliminar</a>';

 		echo '</div>';

 		echo '<div class="text-center">
 		<a data-toggle="modal" data-target="#ModalBusqueda" class="btn-floating btn-info" title="Buscar Producto"><i class="fas fa-search"></i></a>
		<a href="?modal=descuentocot" class="btn-floating btn-default" title="Descuento"><i class="fas fa-money-bill"></i></a>
		<a id="xver" op="160" key="'. $this->IdCot($cotizacion) .'" cotizacion="'.$cotizacion.'" esto="1" class="btn-floating btn-success" title="Imprimir"><i class="fas fa-print"></i></a>
		<a href="?modal=oventascot" class="btn-floating btn-primary" title="Venta Especial"><i class="fas fa-donate"></i></a>
		<a data-toggle="modal" data-target="#Materiales" class="btn-floating btn-mdb-color" title="agregar Materiales"><i class="fas fa-torii-gate"></i></a>
		</div>';

		if($_SESSION["descuento_cot"] != NULL){
			$texto = 'Esta venta posee un descuento del: ' . $_SESSION["descuento_cot"] . " %";
			Alerts::Mensajex($texto,"danger",NULL,NULL);
		}
		if($_SESSION['cliente_cot']){
			 $textos = 'Cliente: ' . $_SESSION['cliente_nombre']. ".";
			Alerts::Mensajex($textos,"success",NULL,NULL);
		}
 	}



 	public function ObtenerTotal($cotizacion){ // listado de ordenes pendientes
 		$db = new dbConn();

 		    if ($r = $db->select("sum(total)", "cotizaciones", "WHERE cotizacion = '$cotizacion' and td = ".$_SESSION["td"]."")) { 
		        return $r["sum(total)"];
		    }  unset($r);  
 		
 	}

 	public function IdCot($cotizacion){ // listado de ordenes pendientes
 		$db = new dbConn();

		if ($r = $db->select("id", "cotizaciones_data", "WHERE correlativo = '$cotizacion' and td = ".$_SESSION["td"]."")) { 
	        return $r["id"];
	    }  unset($r);  
 		
 	}





} // Termina la lcase
?>