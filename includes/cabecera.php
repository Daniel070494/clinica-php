<?php require_once  'recursos/conexion.php';?>
<!DOCTYPE html>
<html>
    <head lang="es-MX">
        <title>CLINICA</title>
        <meta charset="UTF-8">
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/login/login.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body style="background-color: #E0F8EC">
        <header>
                        <nav class="navbar navbar-expand-sm bg-info navbar-dark">

                            <?php                               
                                    $query_datos = mysqli_query($conexion, "SELECT * FROM datos_clinica");

                                    $datos = mysqli_fetch_array($query_datos, MYSQLI_ASSOC);
                            ?>

                                <a class="navbar-brand" href="#"><?php echo $datos['razon_social']; ?></a>


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
        