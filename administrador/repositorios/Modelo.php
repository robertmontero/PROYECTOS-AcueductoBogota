<?php

require_once "Conexion.php";

class Modelo{

	/*=============================================
	Crear CRUD -> C
	=============================================*/

	static public function recibirRegistros($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}else{
			 var_dump(Conexion::conectar()->errorInfo());
		}
		$stmt -> close();
		$stmt = null;
	}

	/*=============================================
	Leer CRUD -> R
	=============================================*/

	static public function seleccionarRegistros($tabla, $punto, $solo){
		if($punto == null && $solo == null){
			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");
			$stmt->execute();
			return $stmt -> fetchAll();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $punto = :$punto ORDER BY id DESC");
			$stmt->bindParam(":".$punto, $solo, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt -> fetch();
		}
		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	Actualizar CRUD -> U
	=============================================*/

	static public function actualizarRegistro($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombres=:nombres, apellidos=:apellidos, num_ident=:num_ident, tipo_ident=:tipo_ident, email=:email, documento=:documento, estado=:estado WHERE id = :id");
		$stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":num_ident", $datos["num_ident"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_ident", $datos["tipo_ident"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	Eliminar CRUD -> D
	=============================================*/
	static public function eliminarRegistro($tabla, $solo){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $solo, PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt = null;
	}


}
