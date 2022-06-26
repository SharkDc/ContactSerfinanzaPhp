<?php

$usuario  = "id17393667_luistf22";
$password = "YL~9KL~B/&[*Xdd)";
$servidor = "localhost";
$basededatos = "id17393667_serfinanza";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>