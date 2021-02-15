<?php
include('../model/conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","db_variedadesotac");

$consulta="SELECT*FROM TBL_MS_USUARIOS where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){

    header("location:../views/home.php");

}else{
    ?>
    <?php
    include("index.php");


}
mysqli_free_result($resultado);
mysqli_close($conexion);
