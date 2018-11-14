<?php
  include 'conexion.php';

  $post = json_decode(file_get_contents('php://input'), true);

  $id=$post['id'];
  $tarea =$post['task'];
  $descipcion =$post ['description'];

  $update=mysqli_query($conexion," UPDATE tareas SET task='$tarea', description='$descipcion' WHERE id='$id' ");
  ?>
