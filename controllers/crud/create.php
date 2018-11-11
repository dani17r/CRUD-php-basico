<?php
  include 'conexion.php';
//Obtener los valores del formulario
  $post = json_decode(file_get_contents('php://input'), true);

  $tarea =($post['task']);
  $descipcion =($post ['description']);

  $ingresar = mysqli_query($conexion,"INSERT INTO tareas (task, description) VALUES ('$tarea','$descipcion')");

?>
