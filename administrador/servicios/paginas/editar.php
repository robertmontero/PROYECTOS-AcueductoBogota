<?php

if(isset($_GET["id"])){
	$punto = "id";
	$solo = $_GET["id"];
	$denuncia = Controlador::seleccionar($punto, $solo);
}
?>

<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="post">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $denuncia["nombres"]; ?>" placeholder="Escriba su nombre" id="nombres" name="actualizarNombre">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>
				<input type="apellidos" class="form-control" value="<?php echo $denuncia["apellidos"]; ?>" placeholder="Escriba sus apellidos" id="apellidos" name="actualizarApellido">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-id-card"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $denuncia["num_ident"]; ?>" placeholder="Escriba cedula" id="pwd" name="actualizarCedula">
				<input type="hidden" name="cedulaActual" value="<?php echo $denuncia["num_ident"]; ?>">
				<input type="hidden" name="idUsuario" value="<?php echo $denuncia["id"]; ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="far fa-address-card"></i>
					</span>
				</div>
				<input type="tipo_ident" class="form-control" value="<?php echo $denuncia["tipo_ident"]; ?>" placeholder="Tipo de identificacion" id="tipo_ident" name="actualizarTipo">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-at"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $denuncia["email"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-folder"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $denuncia["documento"]; ?>" placeholder=" Escriba descripcion" id="documento" name="actualizarDocumento">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-check-circle"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $denuncia["estado"]; ?>" placeholder=" Escriba descripcion" id="documento" name="actualizarEstado">
			</div>
		</div>
<?php
		$actualizar = Controlador::actualizar();
		if($actualizar == "ok"){
			echo '<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
			</script>';
			echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
			<script>
				setTimeout(function(){
					window.location = "index.php?pagina=inicio";
				},3000);
			</script>
			';
		}
		?>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
</div>
