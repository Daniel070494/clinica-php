<?php

session_start();

include 'includes/cabecera.php';

if(isset($_SESSION['usuario'])){
    
    $usuario = $_SESSION['usuario'];

    echo "<h1>Hola!</h1>";

    echo "<p>Has iniciado sesion como <strong>".$usuario.".</strong></p>";
    
} else {
    header("Location: login.php");
}
?>

<form action='cerrar_sesion.php'>
    <input type="submit" class="btn btn-danger" name="sesionDestroy" value="Cerrar Sesión"/>
</form>

        </body>
</html>