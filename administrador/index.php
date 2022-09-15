<?php
require_once "controladmin/Controlador.php";
require_once "controladmin/Vista.php";
require_once "repositorios/Modelo.php";

$plantilla = new Vista();
$plantilla -> index();
