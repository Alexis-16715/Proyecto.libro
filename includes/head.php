<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library Company</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="./Imagenes/libro-icono-MRK-2.ico">
    <link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/styles.css">

  <body>
    <div class="search">
      <form class="busqueda">
        <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn-search type"="submit">Buscar</button>
      </form>
    </div>
    <div class="container">
      <header class="main-header">
        <img src="Imagenes/icono-libro.jpg" alt="logotipo" class="firs-logo">
       <input type="checkbox" id="open-nav">
       <label for="open-nav" class="toggle-nav">
         <span class="ion-navicon-round"></span>
       </label>
       <nav class="main-nav">
         <ul>
           <li>
             <label class="cierra" for="open-nav">
               <span class="ion-close-circled"></span>
             </label>
             <a href="inicio.php">Inicio</a>
           </li>
           <li><a href="preg-frec.php">Preguntas</a></li>
           <li><a href="Ingreso.php">Ingresa</a></li>
           <li><a href="registro.php">Registro</a></li>
         </ul>
       </nav>
