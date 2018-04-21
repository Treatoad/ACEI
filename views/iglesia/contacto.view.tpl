<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONTACTO-Laboratorios Vitalab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
  </head>
  <body>
<section>
    <article class="row">

      <h1 col-m-12>Contactenos</h1>
      <form action="models/iglesia/enviar.php" method="post" id="form1">
          <fieldset class="col-m-8 col-offset-m-2">
            <label for="txtNombre" class="col-m-4">Nombre:</label>
            <input type="text" id="txtNombre" class="col-m-6"
              name="txtNombre" placeholder="Nombre Completo" required/>
              <div class="error col-m-6 col-offset-m-4 center" id="errorNombre"></div>
          </fieldset>
          <fieldset class="col-m-8 col-offset-m-2">
            <label for="txtCorreo" class="col-m-4">Correo Electrónico:</label>
            <input type="text" id="txtCorreo" class="col-m-6"
              name="txtCorreo" placeholder="correo@electronico.com"/>
              <div class="error col-m-6 col-offset-m-4 center" id="errorCorreo">

              </div>
          </fieldset>

          <fieldset class="col-m-8 col-offset-m-2">
            <label for="txtAsunto"class="col-m-4">Asunto:</label>

            <select id="txtAsunto" name="txtAsunto" class="col-m-6">
              <option value="002">Comentario</option>
              <option value="003">Consulta</option>
            </select>
            <br/>
            <br/>
          </fieldset>

          <fieldset class="col-m-8 col-offset-m-2">
            <label for="txtMensaje" class="col-m-4">Mensaje:</label>
            <input type="text" id="txtMensaje" class="col-m-6" name="txtMensaje"
            placeholder="Escriba su mensaje" />
            <br/>
            <br/>
          </fieldset>

          <fieldset class="col-m-8 col-offset-m-2">
            <br>
            <div class="col-m-10 right">
              <button type="submit" id="btnConfirmar" class="btn btn-primary"><span class="ion-checkmark-round"></span>&nbsp;Confirmar</button>
              &nbsp;
              <a href="index.php?page=inicio" class="btn btn-secundary"><span class="ion-close-round"></span>&nbsp;Cancelar</a>
            </div>
          </fieldset>

      </form>

    </article>

    <script src="public/formulario2_Proyecto.js"></script>
</section>
  </body>
</html>
