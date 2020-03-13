<?php
    require_once 'recursos/conexion.php';

  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];

   
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM usuarios WHERE usuario='$usuario' AND password = '$pass'");
  $resultado = $conexion->query($sql);
 
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['usuario'] = $usuario;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: index.php"); 
  }else{
    echo 'El usuario o password es incorrecto, <a href="login.php">vuelva a intenarlo</a>.<br/>';
  }
 
?>