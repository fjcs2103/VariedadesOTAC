<?php
error_reporting(0);

$servername= "localhost";
$usuario= "root";
$contraseña= '';
$database= "db_variedadesotac";
$conexion = new mysqli($servername,$usuario,$contraseña,$database);

if ($conexion->connect_errno){
    echo("conexion fallida");
}else
//echo " Conexion correcta   "
?>
