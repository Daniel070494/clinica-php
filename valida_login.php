<?php
    require_once 'recursos/conexion.php';

  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];
  $rol = $_POST['rol'];

  $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password = '$pass'";
      $result = mysqli_query($conexion,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      $rol_usuario = $row['id_roles'];
      
      if($count == 1 && $rol_usuario == $rol) {
         $_SESSION['usuario'] = $usuario;
         $_SESSION['user_id'] = $row['user_n'];
         $_SESSION['id_roles'] = $rol_usuario;

        // header("location: index.php");
         
         switch ($rol_usuario) {
            case 1:
                header("location: login.php");
                break;
            case 2:
                header("location: index.php");
                break;
            case 3:
                header("location: index_paciente.php");
                break;

        }
      }
      else {
         echo 'El usuario o password es incorrecto, <a href="login.php">vuelva a intenarlo</a>.<br/>';
      }
 
?>