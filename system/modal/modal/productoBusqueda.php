<div class="modal bounceIn" id="<? echo $_GET["modal"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          BUSCAR PRODUCTO</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->

<div align="center">
  <div class="col-md-12 z-depth-2 justify-content-center">
      <div class="md-form mt-0">
        <form id="p-busqueda">
        <input class="form-control" type="text" placeholder="Buscar Producto" aria-label="Search" id="key" name="key" autofocus>
        <button class="btn aqua-gradient btn-rounded btn-sm" type="submit" id="btn-busqueda" name="btn-busqueda">Buscar</button>
        </form>
      </div>
  </div>
  <div class="col-md-12 z-depth-2 justify-content-center" id="muestra-busqueda"></div>
</div>

<div id="contenido">
  
</div>
        <!-- Default switch -->
          <div class="switch">
            Busqueda por Tags
            <label>
             Off
              <input type="checkbox" id="busquedaTags" name="busquedaTags" >
              <span class="lever"></span> 
             On 
            </label>
          </div>
<!-- ./  content -->
      </div>
      <div class="modal-footer">
<?php 
        if($_SERVER['HTTP_REFERER'] != XSERV . "?modal=productoBusqueda"){
          $url = $_SERVER['HTTP_REFERER'];
        } else{
          $url = "?";
        }

 ?>

<?php if($_SESSION["root_taller"] == "on"){  ?>
          <a href="?modal=productoBusquedaTaller" class="btn btn-link">Busqueda Avanzada</a>
<?php } else { ?>
          <a href="?modal=productoBusquedaAvanzada" class="btn btn-link">Busqueda Avanzada</a>
<?php }  ?>


          <a href="<?php echo $url; ?>" class="btn btn-primary btn-rounded">Regresar</a>
    
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->