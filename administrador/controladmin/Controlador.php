<?php
require_once("repositorios/Modelo.php");

class Controlador{

	/*=====================
	Metodo para Guardar
	=======================*/

	static public function guardar(){
		if(isset($_POST["registroNombre"])){
			$tabla = "administrador";
			$datos = array("nombre" => $_POST["registroNombre"],
				           "email" => $_POST["registroEmail"],
				           "password" => $_POST["registroPassword"]);
			$respuesta = Modelo::recibirRegistros($tabla, $datos);
			return $respuesta;
		}
	}

	/*=========================
	Metodo para Seleccionar
	===========================*/

	static public function seleccionar($punto, $solo){
		$tabla = "denuncias";
		$respuesta = Modelo::seleccionarRegistros($tabla, $punto, $solo);
		return $respuesta;
	}

	/*=======================
	Metodo para Ingresar
	=========================*/

	public function ingresar(){
		if(isset($_POST["ingresoEmail"])){
			$tabla = "administrador";
			$punto = "email";
			$solo = $_POST["ingresoEmail"];
			$respuesta = Modelo::seleccionarRegistros($tabla, $punto, $solo);
			if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){
				$_SESSION["validarIngreso"] = "ok";
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
					window.location = "index.php?pagina=inicio";
				</script>';
			}else{
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
				</script>';
				echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
			}
		}
	}

	/*======================
	Metodo para Actualizar
	========================*/
	static public function actualizar(){
		if(isset($_POST["actualizarNombre"])){
			if($_POST["actualizarCedula"] != ""){
				$cedula = $_POST["actualizarCedula"];
			}else{
				$cedula = $_POST["cedulaActual"];
			}
			$tabla = "denuncias";
			$datos = array("id" => $_POST["idUsuario"],
							"nombres" => $_POST["actualizarNombre"],
				           "apellidos" => $_POST["actualizarApellido"],
				           "num_ident" => $_POST["actualizarCedula"],
									 "tipo_ident" => $_POST["actualizarTipo"],
								   "email" => $_POST["actualizarEmail"],
									"documento" => $_POST["actualizarDocumento"],
									"estado" => $_POST["actualizarEstado"]);

			$respuesta = Modelo::actualizarRegistro($tabla, $datos);
			return $respuesta;
		}
	}

	/*====================
	Medodo para Eliminar
	======================*/
	public function eliminar(){
		if(isset($_POST["eliminarRegistro"])){
			$tabla = "denuncias";
			$solo = $_POST["eliminarRegistro"];
			$respuesta = Modelo::eliminarRegistro($tabla, $solo);
			if($respuesta == "ok"){
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
					window.location = "index.php?pagina=inicio";
				</script>';
			}
		}
	}
}
