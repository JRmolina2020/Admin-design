
<!-- /////////////includes///////////// -->
<title>App</title>
<?php include '../components/menu/index.php';?>
<link rel="import" href="../src/index.html">
<!-- Bootstrap Select Css -->
<link href="../src/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <!-- Select Plugin Js -->
 <script src="../src/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- /////end//////////// -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="card">
<div class="header bg-red">
<h2>
Gestion de usuarios <small>del sistema</small>
</h2>
</div>
<div class="body">
<button type="button"  data-toggle="modal" data-target="#modal_usuarios" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
<i class="material-icons">add</i></button>
</div>
</div>
</div>	
<!-- modal insert -->
<!-- Modal -->
<!-- modals de registros y de edicion de usuarios -->
<div class="modal fade" id="modal_usuarios" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>

<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 class="modal-title">REGISTRO DE USUARIOS</h5>
</div>
<div class="modal-body">
<!-- elements forms -->
<div class="body">
<form id="formulario_usuario" name="formulario_usuario">
<label for="email_address">Nombre</label>
<div class="form-group">
<div class="form-line">
<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Digite su nombre" onfocus>
</div>
</div>
<label for="email_address">Correo</label>
<div class="form-group">
<div class="form-line">
<input type="text" id="correo" name="correo" class="form-control" placeholder="Digite su correo electronico">
</div>
</div>
<label for="password">Password</label>
<div class="form-group">
<div class="form-line">
<input type="password" id="pass"  name="pass" class="form-control" placeholder="Digite su contraseña">
</div>
</div>
<label for="tipo_usuario">Tipo de usuario</label>
<select class="form-control show-tick" id="nivel" name="nivel">
<option value=""> Por favor seleccione</option>
<option value="ADMINISTRADOR">Administrador</option>
<option value="VETERINARIO">Veterinario</option>
<option value="ASISTENTE">Asistente</option>
</select>
<br><br>
<label for="email_address">Foto</label>
<div class="form-group">
<div class="form-line">
<input type="file" id="foto" name="foto" class="form-control">
</div>
</div>
<br>
<button type="button" class="btn btn-primary m-t-15 waves-effect">Guardar</button>
</form>
</div>
<!-- end  elements forms -->
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
</div>
</div>
</div>
</div>
<!-- end modal -->
</body>
</html>
