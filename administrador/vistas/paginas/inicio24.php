
<?php

if(!isset($_SESSION["validarIngreso"])){

	echo '<script>window.location = "index.php?pagina=ingreso";</script>';

	return;

}else{

	if($_SESSION["validarIngreso"] != "ok"){

		echo '<script>window.location = "index.php?pagina=ingreso";</script>';

		return;
	}

}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>




<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($usuarios as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["fecha"]; ?></td>
			<td>

			<div class="btn-group">

				<div class="px-1">

				<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

				</div>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">

					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();

					?>

				</form>

			</div>


			</td>
		</tr>

	<?php endforeach ?>

	</tbody>
</table>
<!--=====================================
FORMULARIO DEL USUARIO
======================================-->
<div class="p-5 ml-auto bg-primary">
  <form method="post">
    <div class="card-tittle">
      <h4>FORMULARIO DE ACCION DE TUTELA</h4>
    </div>
    <fieldset>
      <legend>Informacion personal</legend>
      <p>
        <div class="form-group">
          <label for="nombre">Nombres:</label>
          <input type="text" class="form-control" id="nombre" name="nombres" size="50" placeholder="Escriba sus nombres" required>
        </div>
      </p>
      <p>
        <div class="form-group">
          <label for="apellido">Apellidos:</label>
          <input type="text" class="form-control" id="apellido" name="apellidos" size="50" placeholder="Escriba sus apellidos" required>
        </div>
      </p>
      <div class="form-group">
        <label for="t_dent">Identificacion:</label>
        <select class="form-control" name="tipo_ident">
          <option value="CC" selected>Cedula de ciudadania
            <option value="TI">Tarjeta de identidad
              <option value="PE">Pasaporte
                <option value="CE">Cedula extrajera
                </select>
              </div>
              <div class="form-group">
                <label for="n_ident"></label>
                <input type="number" class="form-control" id="n_ident" name="num_ident" placeholder="Digite el numero identificacion" required/>
              </div>
            </fieldset>
          </br>
          <fieldset>
            <legend>Informacion de contacto</legend>
            <p>
              <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" class="form-control" id="city" name="ciudad" placeholder="Ciudad" >
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="dir">Direccion:</label>
                <input type="text" class="form-control" id="dir" name="direccion" placeholder="Direccion">
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="emails">Email:</label>
                <input type="email" class="form-control" id="emails" name="email" size="50" placeholder="Correo" required>
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="cel">Celular:</label>
                <input type="number" class="form-control" id="cel" name="celular" placeholder="Celular">
              </div>
            </p>
          </fieldset>
        </br>
        <fieldset>
          <legend>Informacion del documento</legend>
          <p>
            <div class="form-group">
              <label for="desc">Descripcion:</label>
              <textarea class="form-control" rows="5" id="desc" name="descripcion"></textarea>
            </div>
          </p>
        </fieldset>
      </br>
      <fieldset>
        <legend>Cargar documentos</legend>
        <input type="file" class="form-control-file border" id="file" name="subirfile" multiple>
      </fieldset>
    </br>

    <?php

    // $formulario = new ControladorFormularios();
    // $formulario -> ctrFormulario();

    // $resultado = ModeloController::enviar();

    if(isset($_POST["enviar"])){

      echo '<script>
      if(window.history.replaceState){
        window.history.replaceState( null, null, window.location.href);
      }

      </script>';

      echo '<div class="alert alert-success">El documento se ha registrado</div>';
    }

    ?>

    <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
  </form>
</div>
