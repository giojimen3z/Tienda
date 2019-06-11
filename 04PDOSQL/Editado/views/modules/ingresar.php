<h1>INGRESAR</h1>

	<form method="post" action="">
		
<<<<<<< HEAD
		<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

		<input type="password" placeholder="Contraseña" name="passwordIngreso" required>

		<input type="submit" value="Enviar">

	</form>
<?php 


$ingreso = new MvcController();

$ingreso -> ingresoUsuarioController();

if (isset($_GET['action'])) {
	
	if($_GET['action'] == "fallo"){

	   echo "fallo al ingresar";
	}
}


?>
=======
		<input type="text" placeholder="Usuario" name="usuario" required>

		<input type="password" placeholder="Contraseña" name="password" required>

		<input type="submit" value="Enviar">

	</form>
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121
