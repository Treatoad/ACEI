<?php
  $destino="iglesiasacei@gmail.com";
  $nombre=$_POST["txtNombre"];
  $correo=$_POST["txtCorreo"];
  $asunto=$_POST["txtAsunto"];
  $mensaje=$_POST["txtMensaje"];
  $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

  mail($destino,$asunto,$contenido);

  $success = true;
  echo "<script language=\"JavaScript\">";
  if ($success) {
    echo "alert('Se ha enviado el mensaje correctamente');";
  } else {
    echo "alert('No se ha conseguido enviar el mensaje');";
  }
  echo "</script>";

  header("Location:../../index.php?page=inicio");
 ?>
