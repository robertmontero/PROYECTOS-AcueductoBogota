<?php

class Conexion{

	static public function conectar(){
		$enlace = new PDO("mysql:host=localhost;dbname=acueducto",
			            "root",
			            "");

		$enlace->exec("set names utf8");
		return $enlace;
	}
}
