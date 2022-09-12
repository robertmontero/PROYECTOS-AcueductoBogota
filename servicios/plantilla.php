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
                    <?php if ($_GET["pagina"]=="inicio"): ?>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                      </li>
                      <?php else: ?>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"]=="derechodepeticion"): ?>
                      <li class="nav-item">
              					<a class="nav-link active" href="index.php?pagina=derechodepeticion">Derecho de Peticion</a>
              				</li>
                      <?php else: ?>
                        <li class="nav-item">
                					<a class="nav-link" href="index.php?pagina=derechodepeticion">Derecho de Peticion</a>
                				</li>
                    <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"]=="reparaciondirecta"): ?>
                      <li class="nav-item">
              					<a class="nav-link active" href="index.php?pagina=reparaciondirecta">Reparacion Directa</a>
              				</li>
                      <?php else: ?>
                        <li class="nav-item">
                					<a class="nav-link" href="index.php?pagina=reparaciondirecta">Reparacion Directa</a>
                				</li>
                    <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"]=="procesopenal"): ?>
                      <li class="nav-item">
              					<a class="nav-link active" href="index.php?pagina=procesopenal">Proceso Penal</a>
              				</li>
                      <?php else: ?>
                        <li class="nav-item">
                					<a class="nav-link" href="index.php?pagina=procesopenal">Proceso Penal</a>
                				</li>
                    <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"]=="acciondetutela"): ?>
                      <li class="nav-item">
              					<a class="nav-link active" href="index.php?pagina=acciondetutela">Accion de tutela</a>
              				</li>
                      <?php else: ?>
                        <li class="nav-item">
                					<a class="nav-link" href="index.php?pagina=acciondetutela">Accion de tutela</a>
                				</li>
                    <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"]=="nulidades"): ?>
                      <li class="nav-item">
              					<a class="nav-link active" href="index.php?pagina=nulidades">Nulidades y restablecimiento</a>
              				</li>
                      <?php else: ?>
                        <li class="nav-item">
                					<a class="nav-link" href="index.php?pagina=nulidades">Nulidades y restablecimiento</a>
                				</li>
                    <?php endif; ?>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=derechodepeticion">Derecho de Peticion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=reparaciondirecta">Reparacion Directa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=procesopenal">Proceso Penal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=acciondetutela">Accion de tutela</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=nulidades">Nulidades y restablecimiento</a>
              </li>
            <?php endif; ?>
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
            #ISSET: isset() Determina si una variable esta definida y no es null
            if(isset($_GET["pagina"])){
              if($_GET["pagina"] == "inicio" ||
              $_GET["pagina"] == "derechodepeticion" ||
              $_GET["pagina"] == "reparaciondirecta" ||
              $_GET["pagina"] == "procesopenal" ||
              $_GET["pagina"] == "acciondetutela" ||
              $_GET["pagina"] == "nulidades"){
                include "paginas/".$_GET["pagina"].".php";
              }else{
                include "paginas/error404.php";
              }
            }else{
              include "paginas/inicio.php";
            }
             ?>
        </div>
      </div>
      <!--=====================================
      Footer
      ======================================-->
      <div class="card-footer">@Robert Montero @Katherin Gaitan</div>
    </div>
  </div>

  </body>
  </html>
