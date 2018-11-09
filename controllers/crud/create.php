<?php
  include 'conexion.php';
//Obtener los valores del formulario
  $nombre =($_POST['name']);
  $apellido =($_POST ['lastname']);
  $email =($_POST ['email']);
  $usuario =($_POST ['username']);
  $contra =($_POST ['password']);

  if ($nombre=="" || $apellido=="" || $email=="" || $usuario=="" || $contra=="") {
    header('Location: ../../index.php');
  }else{
    $ingresar = mysqli_query($conexion,"INSERT INTO usuarios (name, lastname, email, username, password) VALUES ('$nombre','$apellido','$email','$usuario','$contra')");

      if($ingresar){
        header('Location: ../../index.php');
        // echo "listoo";
      }else{
        echo "No se envio: <br>";
      }
  }

?>
