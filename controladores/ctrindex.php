<?php
require_once("modelos/mdlindex.php");

class ModeloController{
  private $model;
  public function __construct(){
    $this->model = new Modelo();
  }

  //mostrar
  static function index(){
    require_once ("vistas/plantilla.php");
  }

  //Guardar
  static function enviar(){

    if(isset($_POST["nombres"])){

			$tabla = "denunciantes";

			$datos = array("nombres" => $_POST["nombres"],
				           "apellidos" => $_POST["apellidos"],
				           "num_ident" => $_POST["num_ident"],
                   "tipo_ident" => $_POST["tipo_ident"],
				           "ciudad" => $_POST["ciudad"],
                   "direccion" => $_POST["direccion"],
				           "email" => $_POST["email"],
                   "celular" => $_POST["celular"],
				           "descripcion" => $_POST["descripcion"]);

        $respuesta = Modelo::insertar($tabla, $datos);
        // header("location:".urlsite);
       return $respuesta;
		 }

  }
}
