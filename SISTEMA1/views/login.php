<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variedades Otac</title>
    <link rel="stylesheet" href="views/css/login.css">
    <link rel="stylesheet" href="views/css/cabecera.css">
    <link rel="stylesheet" href="">
</head>
<body>
   <form action="controllers/validar.php" method="post"> //METODOS POST para la conexion de BD
		 <?php
		 include("../controllers/validar.php")
		 ?>
     <img src = 'otac3.jpg' width="200" height="180" >
   <h1 class="animate__animated animate__backInLeft">Inicio de sesion</h1>
              //El nombre del input debe ser usuario ya que lo mandamos a llamar con la conexión mediante el metodo POST
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario" style="text-transform:uppercase;" value=""onkeyup="javascript:this.value=this.value.toUpperCase();"></p>
              //El nombre del input debe ser contraseña ya que lo mandamos a llamar con la conexión mediante el metodo POST
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">

   </form>

</body>
</html>
