<h1>INGRESAR</h1>

	<form method="post" onsubmit="return ValidarIngreso()">
		
		<input type="text" placeholder="Usuario" maxlength="6" name="usuarioIngreso" id="usuarioIngreso" required>

		<input type="password" placeholder="Contraseña" name="passwordIngreso" id="passwordIngreso" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

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


if (isset($_GET['action'])) {
	
	if($_GET['action'] == "fallointentos"){

	   echo "Ha fallado 3 veces para ingresar por favor use el captcha";
	}
}


?>
