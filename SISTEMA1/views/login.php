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
<body>
   <form action="controllers/validar.php" method="post">
		 <?php
		 include("../controllers/validar.php")
		 ?>
   <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario" style="text-transform:uppercase;" value=""onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">

   </form>

</body>
</html>
