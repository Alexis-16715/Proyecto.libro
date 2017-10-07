<?php

	require_once('validar-usuario.php');

	$sexos = [
		'F' => 'Femenino',
		'M' => 'Masculino',
		'O'=>'Otro'
	];

	$nombre = '';
	$apellido = '';
	$email = '';
	$username = '';

	if ($_POST) {

		// Persistencia
		$nombre = $_POST['name'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$username = $_POST['username'];

		// Validación - La función validarUsuario retorna un array
		$erroresFinales = validarUsuario($_POST);

		if (empty($erroresFinales)) {

			// Si no hay errores en POST 1ero ejecuto la función de guardar la imagen
			$erroresFinales = guardarImagen('avatar', $erroresFinales);

			// Vuelvo a preguntar si el array de errores está vació
			if (empty($erroresFinales)) {
				// Creo Usuario en ARRAY, $usuarioAGuardar recibe el return de la función crear usuario, que es un array asociativo que armé como yo quería.
				$usuarioAGuardar = crearUsuario($_POST);

				// Guardo Usuario en JSON, recibe el array guardado en la variable de arriba
				guardarUsuario($usuarioAGuardar);

				// Ok guardado, redireccionado
				header('location: felicidad.php'); exit;
			}
		}

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Repaso de PHP</title>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

		<form method="post" class="register-form" enctype="multipart/form-data">
			<label>Nombre:</label> <br>
			<input type="text" name="name" value="<?=$nombre;?>">
			<?php if (isset($erroresFinales['nombre'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['nombre'];?></span>
			<?php endif; ?>
			<br>

			<label>Apellido:</label> <br>
			<input type="text" name="apellido" value="<?=$apellido;?>">
			<?php if (isset($erroresFinales['apellido'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['apellido'];?></span>
			<?php endif; ?>
			<br>

			<label>Correo electrónico:</label> <br>
			<input type="text" name="email" value="<?=$email;?>">
			<?php if (isset($erroresFinales['email'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['email'];?></span>
			<?php endif; ?>
			<br>

			<label>Usuario:</label> <br>
			<input type="text" name="username" value="<?=$username;?>">
			<?php if (isset($erroresFinales['username'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['username'];?></span>
			<?php endif; ?>
			<br>

			<label>Sexo:</label> <br>
			<select name="sexo">
				<option value="">Elegir</option>
				<?php foreach ($sexos as $letra => $valor): ?>
					<?php if (isset($_POST['sexo']) && $_POST['sexo'] == $letra): ?>
						<option selected value="<?=$letra;?>"><?=$valor;?></option>
					<?php else: ?>
						<option value="<?=$letra;?>"><?=$valor;?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
			<?php if (isset($erroresFinales['sexo'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['sexo'];?></span>
			<?php endif; ?>
			<br>

			<label>Password:</label> <br>
			<input type="password" name="pass">
			<?php if (isset($erroresFinales['pass'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['pass'];?></span>
			<?php endif; ?>
			<br>

			<label>Repetir Password:</label> <br>
			<input type="password" name="repass">
			<?php if (isset($erroresFinales['repass'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['repass'];?></span>
			<?php endif; ?>
			<br>

			<label>Subí tu avatar</label> <br>
			<input type="file" name="avatar">
			<?php if (isset($erroresFinales['imagen'])): ?>
				<span style="color: red;"><i class="ion-ios-close"></i></span>
				<span style="color: red;"><?=$erroresFinales['imagen'];?></span>
			<?php endif; ?>

			<br><br>
			<button type="submit">ENVIAR</button>
		</form>

		<?php if (isset($erroresFinales) && !empty($erroresFinales)): ?>
			<div class="div-errores">
				<ul>
					<?php foreach ($erroresFinales as $clave => $error): ?>
						<li> <?=$error?> </li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</body>
</html>
