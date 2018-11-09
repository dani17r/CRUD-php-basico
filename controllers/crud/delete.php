<?php
  include 'conexion.php';

  $id = ($_GET['id']);

  $eliminar = mysqli_query($conexion,"DELETE from usuarios WHERE id='$id' ");
  if ($eliminar) {
    header('Location: ../../index.php');
  }else {
    echo "no se elimino";
  }

?>
