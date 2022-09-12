<?php
require_once "configuracion.php";
require_once "control/ControlFormulario.php";

  if(isset($_POST["enviado"])){
      if(method_exists("ControlFormulario",$_POST["enviado"])){
         ControlFormulario::{$_POST["enviado"]}();
      }
  }else{
     ControlFormulario::index();
  }
?>
