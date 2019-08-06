<h1>REGISTRO DE USUARIO</h1>

<form method="post" onsubmit="return ValidarRegistro()">
	<label for="usuarioRegistro">Usuario <span></span></label>
	<input type="text" placeholder="Maximo 6 Caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>
	<label for="passwordRegistro">Contraseña</label>
	<input type="password" placeholder="Minimo 6 caracteres, debe contener numero(s) y una mayuscula" name="passwordRegistro" id="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
	<label for="emailRegistro">Correo Electronico<span></span></label>
	<input type="email" placeholder="Ingrese por favor su correo electronico" name="emailRegistro" id="emailRegistro" required>

	<p style="text-align: center">  <input type="checkbox" id="terminos"> <a href="#">Acepta Terminos Y condiciones </a> 	</p>

	<input type="submit" value="Enviar">

</form>
<?php 

$registro = new MvcController();

$registro -> registrousuariocontroller();

if (isset($_GET['action'])) {
	
	 if($_GET['action'] == "ok"){

		echo "Registro Exitoso";
	 }
}

?>