<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acueducto de Bogota</title>
    <!--=================================
    PLUGINS DE CSS
    ==================================-->
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--=================================
    PLUGINS DE JS
    ==================================-->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled fontawesome -->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--=====================================
  	LOGOTIPO
  	======================================-->
    <div class="card">
      <div class="card-header">
        <div class="container">
          <section id="logo">
             <img class="circular" src="vistas/img/logo.png" width="90px"	height="70px" float="left">
          </section>
      	</div>
      </div>
	<!--=====================================
	BOTONERA DE PAGINAS
	======================================-->
  <div class="container-fluid  bg-light">
    <div class="container py-3">
			<ul class="nav nav-justified py-1 nav-pills">
			<?php if (isset($_GET["pagina"])): ?>
				<?php if ($_GET["pagina"] == "registro"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">Registro</a>
					</li>
				<?php endif ?>
				<?php if ($_GET["pagina"] == "ingreso"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
				<?php endif ?>
				<?php if ($_GET["pagina"] == "inicio"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
					</li>
				<?php endif ?>
				<?php if ($_GET["pagina"] == "salir"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=salir">Salir</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>
				<?php endif ?>
			<?php else: ?>
				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
				</li>
			<?php endif ?>
			</ul>
		</div>
	</div>

	<!--=====================================
	CONTENIDO
	======================================-->

  <div class="container-fluid">
    <div class="container  p-5 my-3 bg-primary text-white">
      <div class="card-body">
			<?php
		#ISSET: isset() Determina si una variable está definida y no es NULL
				if(isset($_GET["pagina"])){
					if($_GET["pagina"] == "registro" ||
					   $_GET["pagina"] == "ingreso" ||
					   $_GET["pagina"] == "inicio" ||
					   $_GET["pagina"] == "editar" ||
					   $_GET["pagina"] == "salir"){
						include "paginas/".$_GET["pagina"].".php";
					}else{
						include "paginas/error404.php";
					}
				}else{
					include "paginas/registro.php";
				}
			 ?>

    </div>
	</div>
  <!--=====================================
  Footer
  ======================================-->
  <div class="card-footer">@Robert Montero @Katherin Gaitan</div>
 </div>
</body>
</html>
