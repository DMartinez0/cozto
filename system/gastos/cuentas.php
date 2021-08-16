<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'application/common/Alerts.php';
include_once 'system/gastos/Cuentas_Banco.php';
$cuenta = new Cuentas();
?>

<div class="clearfix">
  <h2 class="h2-responsive float-left">CUENTAS BANCARIAS</h2> 
  <h2 class="h2-responsive float-right"><a id="addbanco" class="btn-floating btn-info btn-sm mb-3" title="Nueva Cuenta"><i class="fas fa-plus"></i></a></h2>
</div>




<div id="cuentas">
<?php
$cuenta->MostrarBancos();
?>
</div>

<div id="resultado">

</div>



<!-- MODAL PARA CONFIRMAR ELIMINACION -->

<div class="modal fade" id="ConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Seguro que desea eliminar este elemento?</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-times fa-4x animated rotateIn"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a id="borrar-gasto" class="btn  btn-outline-danger">Eliminar</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->





<!-- Ver imagenes -->
<div class="modal" id="ModalAddImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         IMAGENES GASTOS</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->

<div id="formulario">
  <form id="form-img" name="form-img" class="md-form">

    <div class="file-field">
        <a class="btn-floating blue-gradient mt-0 float-left">
            <i class="fas fa-paperclip" aria-hidden="true"></i>
            <input type="file" id="archivo" name="archivo">
        </a>
        <div class="file-path-wrapper">
           <input class="file-path validate" type="text" placeholder="Agregue su imagen">
        </div>
    </div>

  <div class="md-form my-2 ">
      <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="2" id="descripcion" name="descripcion"></textarea>
      <label for="materialContactFormMessage">Descripci&oacuten de la imagen</label>
  </div>

<input type="hidden" id="codigo" name="codigo" value="">
   
<div class="text-center">
  <button class="btn btn-outline-info btn-rounded z-depth-0 my-2 waves-effect" type="submit" id="btn-img" name="btn-img">Subir Imagen</button>
</div>
    </form>
</div>


<div id="vista">
</div>

<!-- ./  content -->
      </div>
      <div class="modal-footer">
    <a id="showform" class="btn btn-danger btn-rounded">Agregar</a>
   <a id="cerrarmodal" class="btn btn-primary btn-rounded" data-dismiss="modal">Cerrar</a>
   
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->

















<!-- Ver add Categoria -->
<div class="modal" id="ModalAddCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         AGREGAR NUEVA CATEGORIA</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->

<div id="formulario">
  <form id="form-categoria" name="form-categoria" class="md-form">

<input type="text"  id="categoria" name="categoria" class="form-control mb-3" placeholder="Categoria">


<div class="text-center">
  <button class="btn btn-outline-info btn-rounded z-depth-0 my-2 waves-effect" type="submit" id="btn-categoria" name="btn-categoria">Agregar Categoria</button>
</div>
    </form>
</div>


<div id="vista_categoria">
</div>

<!-- ./  content -->
      </div>
      <div class="modal-footer">
   <a id="cerrarmodal" class="btn btn-primary btn-rounded" data-dismiss="modal">Cerrar</a>
   
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->






















<!-- Ver add BANCO -->
<div class="modal" id="ModalAddBanco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         AGREGAR CUENTA BANCARIA</h5>
      </div>
      <div class="modal-body">
<!-- ./  content -->

<div id="formulario">
  <form id="form-banco" name="form-banco" class="md-form">

<select class="browser-default custom-select mb-3" id="tipo" name="tipo">
  <option value="2">CHEQUERA</option>
  <option value="3" selected>CUENTA BANCARIA</option>
  <option value="4">TARJETA DE CREDITO</option>
  <option value="5">CAJA CHICA</option>
</select>


<input type="text"  id="nocuenta" name="nocuenta" class="form-control mb-3" placeholder="Numero de Cuenta">

<input type="text"  id="banco" name="banco" class="form-control mb-3" placeholder="Banco">

<input type="number" step="any" id="saldo" name="saldo" class="form-control mb-3" placeholder="Saldo Inicial">


<div class="text-center">
  <button class="btn btn-outline-info btn-rounded z-depth-0 my-2 waves-effect" type="submit" id="btn-banco" name="btn-banco">Agregar Cuenta</button>
</div>
    </form>
</div>


<div id="vista_banco">
</div>

<!-- ./  content -->
      </div>
      <div class="modal-footer">
   <a id="cerrarmodal" class="btn btn-primary btn-rounded" data-dismiss="modal">Cerrar</a>
   
      </div>
    </div>
  </div>
</div>
<!-- ./  Modal -->
