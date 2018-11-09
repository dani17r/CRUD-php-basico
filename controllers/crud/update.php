<?php
  include 'conexion.php';

  $id =($_POST['id']);
  $nombre =($_POST['name']);
  $apellido =($_POST ['lastname']);
  $email =($_POST ['email']);
  $usuario =($_POST ['username']);
  $contra =($_POST ['password']);

  $editar = mysqli_query($conexion," UPDATE usuarios SET name='$nombre', lastname='$apellido', email='$email', username='$usuario', password='$contra' WHERE id='$id' ");

  if ($editar){
    header('Location: ../../index.php');
  }else {
    echo "no se edito";
  }
  ?>
