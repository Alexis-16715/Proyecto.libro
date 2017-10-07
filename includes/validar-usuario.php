<?php
	function validarUsuario($data){
		$errores = [];

		if (trim($data['name']) == '') {
			$errores['nombre'] = 'Che escribí el nombre!';
		}
		if (trim($data['apellido']) == '') {
			$errores['apellido'] = 'Che escribí el apellido!';
		}

		if (trim($data['email']) == '') {
			$errores['email'] = 'Che escribí el email!';
		} elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$errores['email'] = 'Che el email ES INVALIDO!';
		} elseif (comprobarEmail($data['email']) != false) {
			$errores['email'] = 'Amigx el email ya existe';
		}

		if (trim($data['username']) == '') {
			$errores['username'] = 'Escribí un nombre de usuario!';
		}

		if (trim($data['pass']) == '') {
			$errores['pass'] = 'Che escribí la contraseña!';
		}

		if (trim($data['repass']) == '') {
			$errores['repass'] = 'Che escribí la contraseña de nuevo!';
		} elseif (trim($data['pass']) != trim($data['repass'])) {
			$errores['repass'] = 'Las contraseñas no coinciden!';
		}

		if (trim($data['sexo']) == '') {
			$errores['sexo'] = 'Che elegí un sexo!';
		}

		return $errores;
	}

	function crearUsuario($datos){
		$usuarioFinal = [
			'id' => generarId(),
			'name' => $datos['name'],
			'lastname' => $datos['apellido'],
			'email' => $datos['email'],
			'username' => $datos['username'],
			'password' => password_hash($datos['pass'], PASSWORD_DEFAULT),
			'gender' => $datos['sexo']
		];

		return $usuarioFinal;
	}

	function traerTodos(){
		// Obtengo el contenido del JSON
		$archivo = file_get_contents("usuarios.json");

		// esto me arma un array con todos los usuarios
      $usuariosJSON = explode(PHP_EOL, $archivo);

		// Saco el último elemento que es una línea vacia
		array_pop($usuariosJSON);

		// Creo un array vacio, para guardar los usuarios
		$usuariosFinal = [];

		// Recorremos el array y generamos por cada usuario un array del usuario
		foreach ($usuariosJSON as $usuario) {
			$usuariosFinal[] = json_decode($usuario, true);
		}

		return $usuariosFinal;
	}

	function generarId(){
		// me traigo todos los usuarios
		$usuarios = traerTodos();

		if (count($usuarios) == 0) {
			return 1;
		}

		// en caso de que haya usuarios agarro el ultimo usuario
		$elUltimo = array_pop($usuarios);

		// pregunto por le id de ese ultimo usuario
		$id = $elUltimo['id'];

		// a ese ID le sumo 1, para asignarle el nuevo ID al usuario  que se esta registrando
		return $id + 1;
	}

	function comprobarEmail ($mail){
		// Traigo todos los usuario
		$usuarios = traerTodos();

		// Recorro ese array
		foreach ($usuarios as $unUsuario) {
			// Si el mail del usuario en el array es igual al que me llegó por POST, devuelvo al usuario
			if ($unUsuario['email'] == $mail) {
				return $unUsuario;
			}
		}

		return false;
	}

	function guardarUsuario($usuario){
		$usuarioFinal = json_encode($usuario);

		file_put_contents('usuarios.json', $usuarioFinal . PHP_EOL, FILE_APPEND); //PHP_EOL = Salto de linea
	}

	// Recibe dos parámetros, el nombre el input de la imagen y el array de errores
	function guardarImagen($laImagen, $errores){
		if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
			// Capturo el nombre de la imagen, para obtener la extensión
			$nombreImagen = $_FILES[$laImagen]['name'];
			// Obtengo la extensión de la imagen
			$ext = pathinfo($nombreImagen, PATHINFO_EXTENSION);
			// Capturo el archivo temporal
			$archivoImagen = $_FILES[$laImagen]['tmp_name'];

			// Pregunto si la extensión es la deseada
			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
				// Armo la ruta donde queda gurdada la imagen
				$rutaArchivo = dirname(__FILE__) . '/images/avatares/' . $_POST['email'] . '.' . $ext;

				// Subo la imagen definitivamente
				move_uploaded_file($archivoImagen, $rutaArchivo);
			} else {
				$errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
			}
		} else {
			// Genero error si no se puede subir
			$errores['imagen'] = 'No se pudo subir la imagen';
		}

		return $errores;
	}
?>
