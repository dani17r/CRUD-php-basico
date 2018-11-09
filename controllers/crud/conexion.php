<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'db-ziz');

    if($conexion->connect_errno) {
      $correcto=false;
    }else {
      $correcto=true;
    }

 ?>
