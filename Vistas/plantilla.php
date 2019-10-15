<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hofarm</title>
  <link href="Vistas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="Vistas/css/sb-admin-2.min.css" rel="stylesheet">
  <script src="Vistas/vendor/jquery/jquery.min.js"></script>
  <script src="Vistas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vistas/vendor/jquery-easing/jquery.easing.min.js"></script>

</head>
<!--=====================================
CUERPO DOCUMENTO
======================================-->
<body id="page-top">
  <?php
  require 'db/datos.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $q = "SELECT COUNT(*) as contar FROM users where email = '$email' and pass = '$password'";
  $consulta = mysqli_query($conexion,$q);
  $array = mysqli_fetch_array($consulta);
  if ($array['contar']>0) {
    $_SESSION['username'] = $usuario;
    
  }else{
    echo"datos incorrectos";
  }
  //if(!empty($_POST['email']) && !empty($_POST['password'])){
    //$records = $conn->prepare('SELECT id,email,pass FROM users where email = :email');
    //$records -> bindParam(':email',$_POST['email']);
    //$records -> execute();
    //$results = $records ->fetch(PDO::FETCH_ASSOC);
    //$_SESSION['iniciarSesion'] = $results['id'];
    //if (count($results) > 0 && password_verify($_POST['password'],$results['pass'])) {
    //  $_SESSION['user_id'] = $results['id'];
    //  header('Location: /index.php');
    //}else{
    //  $message = 'credenciales incorrectas';
    //}
  //}
  if(isset($_SESSION["username"]) && $_SESSION["username"] == "ok"){
   echo '<div id="wrapper">';
    /*=============================================
    MENU
    =============================================*/
    include "Modulos/menu.php";
    /*=============================================
    CABEZOTE
    =============================================*/
    echo '<div id="content-wrapper" class="d-flex flex-column">';
    echo '<div id="content">';
    include "Modulos/cabecera.php";
    echo '<div class="container-fluid">';
    include "Modulos/subtitulo.php";
    include "Modulos/contenedores.php";
    /*=============================================
    CONTENIDO
    =============================================*/
    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "grafico_info"){

        include "Modulos/".$_GET["ruta"].".php";
        }else{
        //include "modulos/404.php";
        }
      /*=============================================
      FOOTER
      =============================================*/
      }else{
    //include "modulos/login.php";
      }
}else{

  include "modulos/login.php";

}
    echo '</div>';
    echo '</div>';
    include "Modulos/footer.php";
    echo '</div>';
    echo '</div>';

  ?>

    <script src="Vistas/js/sb-admin-2.min.js"></script>

</body>
</html>
