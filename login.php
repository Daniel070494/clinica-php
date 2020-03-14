   <?php include 'includes/cabecera.php';?>
	
	<div style="margin-left: 500px; margin-top: 100px; margin-right: 500px;">
            
		<div class="card border-info">
                <form action="valida_login.php" method="POST">
      		<div class="card-header bg-info text-white">Inicio de Sesión</div>
                <div class="card-body" style="background-color: #FFFFFF;">

    
				<div class="col-md-12">
					<label class="basic_label">Rol</label>
                                        <select name="rol" class="form-control" required="required">
                                                <option value="0">Seleccione:</option>
                                                                                              
                                                <?php
                                                  $query = mysqli_query($conexion, "SELECT id_roles, rol, descripcion FROM cat_roles");
                                                  while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_roles].'">'.$valores[rol].' - '.$valores[descripcion].'</option>';
                                                  }
                                                ?>
                                              </select>
				</div>
				<div class="col-md-12">
				<br>
					<label class="basic_label">Usuario:</label>
					<input class="form-control" name="usuario" id="usuario" type="text" required="required">	
				</div>
				<div class="col-md-12">
				<br>
					<label class="basic_label">Contraseña:</label>
					<input class="form-control" name="pass" id="pass" type="password" required="required">	
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

</body>
</html>
