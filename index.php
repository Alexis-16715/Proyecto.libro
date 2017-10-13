<?php
	session_start();

	require_once('register-login/funciones.php');

	if (estaLogueado()) {
		$usuario = traerId($_SESSION['userId']);
		$laImagen = glob('images/avatares/' . $usuario['email'] . '*');
	}

	$tituloDePagina = 'Inicio';
?>
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
		<?php include("inicio.php"); ?>

			<!--fin pag. principal -->

		<!-- Footer -->

		<?php include("includes/footer.php"); ?>
	</div>
	<div>&nbsp;</div>

    </body>
</html>
