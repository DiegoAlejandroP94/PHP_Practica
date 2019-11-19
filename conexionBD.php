<?php

$server = "localhost";
$BD = "condominio";
$userBD = "primaryDiego";
$passBD = "p71nt_d39x";

$tabla_BD1 = "propietario";

error_reporting(0);
$conexion = new mysqli($server,$userBD, $passBD, $BD);

if ($conexion->connect_errno) {
    
    echo "ERROR 404";
    exit();
}
?>