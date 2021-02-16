<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="views/css/login.css">
    <link rel="stylesheet" href="views/css/cabecera.css">
    <link rel="stylesheet" href="">
</head>
<<<<<<< HEAD
<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","db_variedadesotac");

$consulta="SELECT * FROM TBL_MS_USUARIOS where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['TBL_MS_ROLES_id_rol']==1){ //administrador
    header("location:admin.php");

}else
if($filas['TBL_MS_ROLES_id_rol']==2){ //vendedor
header("location:cliente.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
<body>
	<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<img src="imagenes/otac.jpg" width"150" height="150">
			</p>
			<center><font color="green" face="candara">INGRESE SUS DATOS</font></center>
			<form action="views/home.php" method= "POST">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="userName">
					<label class="mdl-textfield__label" for="userName">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="password" id="pass">
					<label class="mdl-textfield__label" for="pass">Contraseña</label>
				</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect"  style="color: #3F51B5; margin: 0 auto; display: block;">
					Iniciar Sesion
				</button>
			</form>
		</div>
	</div>
</body>
=======
<body>
   <form action="controllers/validar.php" method="post">
		 <?php
		 include("../controllers/validar.php")
		 ?>
   <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
>>>>>>> 3a9078f2c800c7c0d28dfc721385a8d8d970babe

   </form>

</body>
</html>
