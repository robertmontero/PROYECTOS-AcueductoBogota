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
$denuncia = Controlador::seleccionar(null, null);
?>

<table class="table table-blue table-hover">
	<thead class="table-success">
		<tr>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cedula</th>
			<th>Tipo</th>
			<th>Email</th>
			<th>Descripcion</th>
			<th>Opciones</th>
		</tr>
	</thead>

	<tbody>
	<?php foreach ($denuncia as $key => $value): ?>
		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombres"]; ?></td>
			<td><?php echo $value["apellidos"]; ?></td>
			<td><?php echo $value["num_ident"]; ?></td>
			<td><?php echo $value["tipo_ident"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["descripcion"]; ?></td>
			<td>
			<div class="btn-group">
				<div class="px-1">
				<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
				</div>
				<form method="post">
					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				<?php
						$eliminar = new Controlador();
						$eliminar -> eliminar();
					?>
				</form>
			</div>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
