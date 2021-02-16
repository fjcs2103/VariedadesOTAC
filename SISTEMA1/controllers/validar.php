<?php


include('../model/conexion.php'); //
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","db_variedadesotac");

$consulta="SELECT*FROM tbl_ms_usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas > 0){

    header("location:../views/home.php");

}else{

  echo "error en la autenticacion";

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
