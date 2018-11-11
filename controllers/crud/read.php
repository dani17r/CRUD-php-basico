<?php
  include 'conexion.php';
  if ($correcto){
      $mostrar = mysqli_query($conexion,"SELECT * FROM tareas");
      if ($mostrar=="") {
        $dato_json=0;
      }else {
        $dato_devuelto = $mostrar->fetch_all();
        $dato_json=json_encode($dato_devuelto);
      }

  }else {
    echo "hubo un pequeño error";
  }
?>
