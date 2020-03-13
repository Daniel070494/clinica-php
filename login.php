<!DOCTYPE html>
<html>
    <head lang="es-MX">
        <title>Inicio Sesión | CLINICA</title>
        <meta charset="UTF-8">
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/login/login.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body background="img/fondo.jpg">
	<header>
		<nav class="navbar navbar-expand-sm bg-info navbar-dark">
			
			<a class="navbar-brand" href="#">Clinica en Desarrollo.</a>

			
			<ul class="navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="#"> Historial Medico </a></li>
				<li class="nav-item active"><a class="nav-link" href="#"> Consultar Citas</a></li>
				<li class="nav-item active"><a class="nav-link" href="#"> Agendar Cita </a></li>

				
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop"
					data-toggle="dropdown"> Personal </a>
					<div class="dropdown-menu">
						<a class="dropdown-item " href="#">Medico General</a> 
						<a class="dropdown-item" href="#">Especialistas</a> 
						<a class="dropdown-item" href="#">Medico de Guardia</a>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	
	<div style="margin-left: 500px; margin-top: 100px; margin-right: 500px;">
            
		<div class="card border-info">
                <form action="valida_login.php" method="POST">
      		<div class="card-header bg-info text-white">Inicio de Sesión</div>
                <div class="card-body" style="background-color: #E0F8F1;">

    
				<div class="col-md-12">
					<label class="basic_label">Rol</label>
                                              <select name="rol" class="form-control">
                                                <option value="0">Seleccione:</option>
                                                <?php include 'recursos/conexion.php';?>
                                                
                                                <?php
                                                  $query = mysqli_query($conexion, "SELECT id_roles, rol, descripcion FROM cat_roles");
                                                  while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_roles].'">'.$valores[descripcion].'</option>';
                                                  }
                                                ?>
                                              </select>
				</div>
				<div class="col-md-12">
				<br>
					<label class="basic_label">Usuario:</label>
					<input class="form-control" name="usuario" id="usuario" type="text">	
				</div>
				<div class="col-md-12">
				<br>
					<label class="basic_label">Contraseña:</label>
					<input class="form-control" name="pass" id="pass" type="password">	
				</div>
				<div class="col-md-12">
				<br>
                                        <input class="btn btn-info" type="submit" value="Acceder">
                                        <button type="button" class="btn btn-danger" onclick="limpiar();">Limpiar</button>
				</div>
			</div>
                </form>
		</div>
		
		<div id="respuesta"></div>
	</div>
	<footer>
	</footer>

</body>
</html>
