<?php

class Conexion{

	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=brxbkyuuppya8254xqch-mysql.services.clever-cloud.com;dbname=brxbkyuuppya8254xqch",
			            "ud51df76som4njvp",
			            "NLnOCDV1XutyNJh0D1wP");

		$link->exec("set names utf8");

		return $link;

	}

}
