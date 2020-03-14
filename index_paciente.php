<?php

session_start();

include 'includes/cabecera.php';

if(isset($_SESSION['usuario'])){
    
    $usuario = $_SESSION['usuario'];   
    $user_n = $_SESSION['user_id'];
    $id_roles = $_SESSION['id_roles'];

    echo "<h1>Hola PACIENTE!</h1>";

    echo "<p>Has iniciado sesion como <strong>".$usuario.".</strong> Con un ID: $user_n y un rol de $id_roles</p>";
    
} else {
    header("Location: login.php");
}


        $sql = "SELECT p.pa_n,
                   u.nombre, 
                   u.a_paterno, 
               u.a_materno, 
               p.enfermedad, 
                   p.medicamentos, 
               ts.descripcion, 
               s.seg_l_desc, 
               p.peso,
               p.alergias 
        from paciente p 
          inner join usuarios u 
            on u.user_n = p.user_n_pa
          inner join cat_tipo_sangre ts
            on ts.tipo_sangre = p.tipo_sangre
          inner join cat_seguro s 
            on s.seg_n = p.seg_n
        where u.user_n = $user_n";
        
$result = mysqli_query($conexion,$sql);
echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Edad</th>
		</tr>";
while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
		</tr>";
}
echo "</table>";
?>
<form action='cerrar_sesion.php'>
    <input type="submit" class="btn btn-danger" name="sesionDestroy" value="Cerrar Sesión"/>
</form>

        </body>
</html>