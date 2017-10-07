<?php  require_once("includes/validar-usuario.php") ?>
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

