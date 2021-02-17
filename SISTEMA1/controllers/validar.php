<?php


include('../model/conexion.php'); //

$usuario=$_POST['usuario'];           //Variable Usuario que almacenara los datos del input Usuario
$contraseña=$_POST['contraseña'];     //Variable Contraseña que almacenara los datos del input Contra


session_start();
$_SESSION['usuario']=$usuario;

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","db_variedadesotac");    //Jalamos los datos de la BD

    //Realizamos un SELECT para Validar la BD con los valores almmacenados en las varibales
$consulta="SELECT*FROM tbl_ms_usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta); //donde se guarda la conexion y la consulta a la base de datos

$filas=mysqli_num_rows($resultado);

  if ($usuario=='' or $contraseña==''){                 //Validacion si los campos estan vacios tirar una alerta
  echo "<script>alert('LLENAR CAMPOS VACIOS');</script>";
  }else {
  if($filas > 0){             //Si los campos de usuario y contraseña estan registrados en la BD acceder a la pantalla home

      header("location:../views/home.php");

  }else{                      //Si los datos no son correctos tirar una alerta
    echo "<script>alert('ERROR EN LA AUTENTICACION');</script>";

  }

  }
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
