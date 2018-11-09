<?php
  include 'conexion.php';
  if ($correcto){
      $mostrar = mysqli_query($conexion,"SELECT id, name, lastname, email, username, password FROM usuarios");
  }else {
    echo "hubo un pequeño error";
  }
?>
