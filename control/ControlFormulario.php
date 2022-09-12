<?php
require_once("repositorios/Repositorio.php");

class ControlFormulario{
  private $transfiere;
  public function __construct(){
    $this->transfiere = new Repositorio();
  }

  // Metodo para ver Plantilla
  static function index(){
    require_once ("servicios/plantilla.php");
  }

  // Metodo para Guardar
  static function guardar(){
    if(isset($_POST["nombres"])){
			$tabla = "denuncias";
			$datos = array("nombres" => $_POST["nombres"],
				           "apellidos" => $_POST["apellidos"],
				           "num_ident" => $_POST["num_ident"],
                   "tipo_ident" => $_POST["tipo_ident"],
				           "ciudad" => $_POST["ciudad"],
                   "direccion" => $_POST["direccion"],
				           "email" => $_POST["email"],
                   "celular" => $_POST["celular"],
				           "descripcion" => $_POST["descripcion"]);

        $respuesta = Repositorio::recibir($tabla, $datos);
       return $respuesta;
		 }
  }
}
