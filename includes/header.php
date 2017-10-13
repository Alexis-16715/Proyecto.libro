  <header class="main-header">
	<h1>Bienvenido a Libros 4U</h1>
	<div class="perfil">
		<?php if (isset($usuario)): ?>
			<a class="button" href="../register-login/perfil-usuario.php">Mi Perfil</a>
			<a class="button" href="../register-login/logout.php">Salir</a>
			<img src="<?=$laImagen[0];?>" alt="avatar" width="50" style="border-radius: 50%;">
			<h3>Hola <?=$usuario['name'];?></h3>
		<?php else: ?>
			<a class="button" href="register-login/register.php">Regístrate</a>
			<a class="button" href="register-login/login.php">Ingresá</a>
		<?php endif; ?>
	</div>
</header>
	  <div class="row">
				<div class="box-i">
<!--						<img src="Imagenes/Whatt.png" alt="" width="10" />-->
							<h2 style="color: rgba(172,168,168,1)">Vsite nuestra Libreria </h2>
								+54 11 telefono 1<br>
								+54 11 telefono 2
			    </div>
				<div class="box-c">
					  <img src="Imagenes/icono-libro.jpg" alt="logotipo" width="99" height="100" class="first-logo">
				</div>
				<div class="box-d">
					<div class="search">
					  <form class="busqueda">
						<input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
						<button class="btn-search" type ="submit">Buscar</button>
					  </form>
					</div>
				</div>
     </div><!-- /.row -->
