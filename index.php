<?php

session_start();

$usuario = $_SESSION['usuario'];

echo "<h1>Hola!</h1>";

echo "<p>Has iniciado sesion como <strong>".$usuario.".</strong></p>";

