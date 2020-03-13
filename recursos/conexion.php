<?php

  // Datos para conectar a la base de datos.
  $servidor = "192.168.1.5";
  $usuario = "root";
  $pwd_bd = "1234";
  $database = "clinica";
  
  // Crear conexión con la base de datos.
  $conexion = mysqli_connect($servidor, $usuario, $pwd_bd, $database)or die ("No se ha podido conectar al servidor de BD.");
  
  // Validar la conexión 
  /*if(mysqli_connect_errno()){
      echo 'La conexión a la base de datos ha fallado: '. mysqli_connect_error();
  } else{
      echo '¡Conexión exitosa!.';
  }*/
  
  mysqli_query($conexion, "SET NAMES 'utf8'");
  
 ?>