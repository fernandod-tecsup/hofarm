<?php
  require 'db/datos.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $q = "SELECT COUNT(*) as contar FROM users where email = '$email' and pass = '$password'";
  $consulta = mysqli_query($conexion,$q);
  $array = mysqli_fetch_array($consulta);

  if ($array['contar']>0) {
    $_SESSION['username'] = $usuario;
    header("location: ../index.php");
  }else{
    echo"datos incorrectos";
  }
?>
