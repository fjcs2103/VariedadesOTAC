<?php
error_reporting(0);
//Documentar los datos para ingresar al login
//$servername= "";
//$username= "";
//$password= '';
//$database= "";
$servername= "localhost";
$username= "";
$password= '';
$database= "";
$conexion = new mysqli();

$conexion->connect($servername,$username,$password,$database);
if ($conexion->connect_error){
    die("conexion fallida: ".$conexion->connect_error);
}else
//echo " ......"
?>
