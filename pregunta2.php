<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = $_POST['nombre_completo'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];
  $edad = $_POST['edad'];

  // Mostrar los datos ingresados
  echo "<p>¡Hola $nombre!</p>";
  echo "<p>Tu dirección es: $direccion</p>";
  echo "<p>Tienes $edad años y tu correo es: $email</p>";

  // Validar la edad
  if ($edad < 18) {
    echo "<script>alert('Solo se admiten usuarios mayores de edad');</script>";
  }
}
?>
