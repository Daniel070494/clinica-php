<?php
    require_once 'recursos/conexion.php';

  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password = '$pass'";
      $result = mysqli_query($conexion,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['usuario'] = $usuario;
         
         header("location: index.php");
      }else {
         echo 'El usuario o password es incorrecto, <a href="login.php">vuelva a intenarlo</a>.<br/>';
      }
 
?>