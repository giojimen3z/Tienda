<h1>REGISTRO DE USUARIO</h1>

<form method="post">
	
<<<<<<< HEAD
	<input type="text" placeholder="Usuario" name="usuarioRegistro" required>

	<input type="password" placeholder="Contraseña" name="passwordRegistro" required>

	<input type="email" placeholder="Email" name="emailRegistro" required>
=======
	<input type="text" placeholder="Usuario" name="usuario" required>

	<input type="password" placeholder="Contraseña" name="password" required>

	<input type="email" placeholder="Email" name="email" required>
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121

	<input type="submit" value="Enviar">

</form>
<?php 

$registro = new MvcController();

$registro -> registrousuariocontroller();

<<<<<<< HEAD
if (isset($_GET['action'])) {
	
	 if($_GET['action'] == "ok"){

		echo "Registro Exitoso";
	 }
}

=======
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121
?>