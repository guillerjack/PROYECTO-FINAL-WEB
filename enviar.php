<?php
  $destino="guillermo.fernandez.rdez@gmail.com";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
  gmail($destino, "Contacto", $contenido);
  header("Location:GRACIAS.html");
?>
