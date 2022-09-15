<div class="p-5 ml-auto bg-primary">
<form method="post">
  <div class="card-tittle">
    <h4>FORMULARIO DE PROCESO PENAL</h4>
  </div>
  <fieldset>
    <legend>Informacion personal</legend>
    <p>
      <div class="form-group">
        <label for="nombre">Nombres:</label>
        <input type="text" class="form-control" id="nombre" name="nombres" size="50" placeholder="Escriba sus nombres" required>
      </div>
    </p>
    <p>
      <div class="form-group">
        <label for="apellido">Apellidos:</label>
        <input type="text" class="form-control" id="apellido" name="apellidos" size="50" placeholder="Escriba sus apellidos" required>
      </div>
    </p>
    <div class="form-group">
      <label for="n_ident">Identificacion:</label>
      <input type="number" class="form-control" id="n_ident" name="num_ident" placeholder="Digite el numero identificacion" required/>
        </br>
          <label for="CC">CC</label>
          <input type="radio" name="tipo_ident" value="CC" id="CC">
          <label for="TI">TI</label>
          <input type="radio" name="tipo_ident" value="TI" id="TI">
          <label for="PE">PE</label>
          <input type="radio" name="tipo_ident" value="PE" id="PE">
          <label for="CE">CE</label>
          <input type="radio" name="tipo_ident" value="CE" id="CE">
            </div>
          </fieldset>
        </br>
        <fieldset>
          <legend>Informacion de contacto</legend>
          <p>
            <div class="form-group">
              <label for="city">Ciudad:</label>
              <input type="text" class="form-control" id="city" name="ciudad" placeholder="Ciudad" >
            </div>
          </p>
          <p>
            <div class="form-group">
              <label for="dir">Direccion:</label>
              <input type="text" class="form-control" id="dir" name="direccion" placeholder="Direccion">
            </div>
          </p>
          <p>
            <div class="form-group">
              <label for="emails">Email:</label>
              <input type="email" class="form-control" id="emails" name="email" size="50" placeholder="Correo" required>
            </div>
          </p>
          <p>
            <div class="form-group">
              <label for="cel">Celular:</label>
              <input type="number" class="form-control" id="cel" name="celular" placeholder="Celular">
            </div>
          </p>
        </fieldset>
      </br>
      <fieldset>
        <legend>Informacion del documento</legend>
        <p>
          <div class="form-group">
            <label for="desc">Descripcion:</label>
            <textarea class="form-control" rows="5" id="desc" name="descripcion"></textarea>
          </div>
        </p>
      </fieldset>
    </br>
    <fieldset>
      <legend>Cargar documentos</legend>
    <!-- <input type="file" class="form-control-file border" id="file" name="subirfile" multiple> -->
    </br>
      <div class="form-check">
       <label for="proceso"><strong>Confirme que los datos son correctos!  </strong></label>
       <input type="checkbox" name="documento" value="Proceso penal" id="proceso" requiered></br>
       <label for="estados"><strong>Confirme su solicitud!  </strong></label>
       <input type="checkbox" name="estado" value="nuevo" id="estados" required>
     </div>
    </fieldset>

   <?php

    // $formulario = new ModeloController();
    // $formulario -> enviar();

    $resultado = ControlFormulario::guardar();

    if($resultado == "ok"){

      echo '<script>
      if(window.history.replaceState){
        window.history.replaceState( null, null, window.location.href);
      }

      </script>';

      echo '<div class="alert alert-success">El documento se ha registrado</div>';
    }

    ?>

    <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
  </form>
</div>
