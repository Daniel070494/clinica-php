<?php

session_start();

include 'includes/cabecera.php';

if(isset($_SESSION['usuario'])){
    
    $usuario = $_SESSION['usuario'];   
    $user_n = $_SESSION['user_id'];
    $id_roles = $_SESSION['id_roles'];

    echo "<h1>Hola MEDICO!</h1>";

    echo "<p>Has iniciado sesion como <strong>".$usuario.".</strong> Con un ID: $user_n y un rol de $id_roles</p>";
    
} else {
    header("Location: login.php");
}
?>

<form action='cerrar_sesion.php'>
    <input type="submit" class="btn btn-danger" name="sesionDestroy" value="Cerrar Sesión"/>
</form>

        </body>
</html>