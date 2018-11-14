<?php
  include 'conexion.php';

  $post = json_decode(file_get_contents('php://input'), true);

  $id=$post['id'];

  $eliminar = mysqli_query($conexion,"DELETE from tareas WHERE id='$id' ");

?>
