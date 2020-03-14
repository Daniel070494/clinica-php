
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
        
$resultado = mysqli_query($conexion,$sql);
?>

<div class="container py-4">
	<div class="card bg-light">
		<div class="card-header" th:text="${titulo}"></div>
		<div class="card-body">

<?php
echo "
	<table class='table table-striped'>
		<tr>
			<th>ID Paciente</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Edad</th>
                        <th>Detalle</th>
		</tr>";
while($fila = mysqli_fetch_array($resultado)){
	echo "
		<tr>
			<td>".$fila['pa_n']."</td>
			<td>".$fila['nombre']."</td>
			<td>".$fila['a_paterno']."</td>
			<td>".$fila['a_materno']."</td>
                        <td><button class='btn btn-success'>Detalle</button></td>
		</tr>";
}
echo "</table>";
echo "<br/>";
?>
                   </div>
	</div>
</div>
<div class="col-12 pull-right">
    <form action='cerrar_sesion.php'>
        <input type="submit" class="btn btn-danger" name="sesionDestroy" value="Cerrar Sesión"/>
    </form>
</div>
        </body>
</html>