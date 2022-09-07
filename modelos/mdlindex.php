<?php
require_once("controladores/ctrindex.php");
require_once "conexion.php";
class Modelo{

  static public function insertar($tabla, $datos){

		#statement: declaración

		#prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres, apellidos, num_ident, tipo_ident, ciudad, direccion, email, celular, descripcion) VALUES (:nombres, :apellidos, :num_ident, :tipo_ident, :ciudad, :direccion, :email, :celular, :descripcion)");

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

		$stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":num_ident", $datos["num_ident"], PDO::PARAM_STR);
    $stmt->bindParam(":tipo_ident", $datos["tipo_ident"], PDO::PARAM_STR);
    $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
    // $stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			 var_dump(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();

		$stmt = null;

	}

}
























  // public function mostrar($tabla,$condicion){
  //   $consul="select*from".$tabla."where".$condicion.";";
  //   $resu=$this->db->query($consul);
  //   while($filas=$resu->FETCHALL(PDO::FETCH_ASSOC)){
  //     $this->datos[]=$filas;
  //   }
  //   return $this->datos;
  // }
  // public function actualizar($tabla,$data,$condicion){
  //   $consulta="update".$tabla."set".$data."where".$condicion;
  //   $resultado=$this->db->query($consulta);
  //   if($resultado){
  //     return true;
  //   }else{
  //     return false;
  //   }
  // }
  // public function eliminar($tabla,$condicion){
  //   $eli="delete from".$tabla."where".$condicion;
  //   $res=$this->db->query($eli);
  //   if($res){
  //     return true;
  //   }else{
  //     return false;
  //   }
  // }
