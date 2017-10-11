<?php  require_once("includes/validar-usuario.php") ?>

<!doctype html>
<html class="no-js" lang="es">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Library Company</title>
   <link rel="icon" href="Imagenes/libro-icono-MRK-2.ico" />
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/styles.css">
<!--	<link rel="stylesheet" href="css/bootstrap.css">-->
   </head>
   <body>
       <!-- Contenido del sitio -->
 <div class="contenido">
       <!-- header-->
   <?php include("includes/header.php"); ?>
   <!--- header-end -->
   <!-- menu-area- -->
   <?php include("includes/menu.php"); ?>
   <!-- menu-area-end -->
   <!-- Inicio-->
     <!--pag. principal  -->
     <h2 id="ingreso2"><div class="container" id="cuerpo2">
      <form id="form-login" action="includes/validar-usuario.php" method="post" >
      <label for="name">Nombre:</label>
      <input name="name" type="text" id="name" class="given-name" placeholder="Ej: Juan" autofocus/ ><br><br>
      <label for="apellido">Apellido:</label>
      <input name="apellido" type="text" id="apellido" class="given-name" placeholder="Ej: Gomez" autofocus/ ><br><br>
      <label for="nickname">Nombre de Usuario:</label>
      <input name="nickname" type="text" id="nickname" class="given-name" placeholder="Ej: Juan123" autofocus/ ><br><br>
      <label for="email">Correo Electronico:</label>
      <input name="email" type="text" id="email" class="email" placeholder="Ej: ejempplo@hotmail.com" autofocus/><br><br>
      <label for="pass">Contraseña:</label>
      <input name="pass" type="password" id="pass" class="pass" placeholder="Ej: 1234"/ ><br><br>
      <label for="repass">Repetir Contraseña:</label>
      <input name="repass" type="password" id="repass" class="repass" placeholder="Repite la Contraseña"/><br><br>
      <input name="submit" type="submit" id="boton" value="Registrar" class="boton"/>
     </div>
     </h2>
     <!--fin pag. principal -->

   <!-- Footer -->

   <?php include("includes/footer.php"); ?>
 </div>
 <div>&nbsp;</div>

   </body>
</html>
