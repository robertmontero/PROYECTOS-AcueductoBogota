<?php

class Conexion{

	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$enlace = new PDO("mysql:host=localhost;dbname=acueducto",
			            "root",
			            "");

		$enlace->exec("set names utf8");

		return $enlace;

	}

}
