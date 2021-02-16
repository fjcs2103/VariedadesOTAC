<?php


include('../model/conexion.php'); //

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


session_start();
$_SESSION['usuario']=$usuario;

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","db_variedadesotac");

$consulta="SELECT*FROM tbl_ms_usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta); //donde se guarda la conexion y la consulta a la base de datos

$filas=mysqli_num_rows($resultado);

if ($usuario=='' or $contraseña==''){
echo "<script>alert('LLENAR CAMPOS VACIOS');</script>";
}else {
if($filas > 0){

    header("location:../views/home.php");

}else{
  echo "<script>alert('ERROR EN LA AUTENTICACION');</script>";

}

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
