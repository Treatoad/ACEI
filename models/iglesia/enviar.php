<?php
  $remitente="From: The sender name <iglesiasacei@gmail.com>\r\n";
  $remitente .= "Reply-To: iglesiasacei@gmail.com\r\n";
  $remitente .= "Content-type: text/html\r\n"
  $destino="iglesiasacei@gmail.com";
  $nombre=$_POST["txtNombre"];
  $correo=$_POST["txtCorreo"];
  $asunto=$_POST["txtAsunto"];
  $mensaje=$_POST["txtMensaje"];
  $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

  mail($destino,$asunto,$contenido,$remitente);

  header("Location:../../index.php?page=inicio");
 ?>
