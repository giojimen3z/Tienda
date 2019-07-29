<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

	<link rel="stylesheet" type="text/css" href="views/modules/estilos.css"> 
	<script src="views/js/jquery-3.0.0.min.js"></script> 	

</head>

<body>

<?php include "modules/navegacion.php"; ?>


<section>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

 ?>

</section>
	<script src="views/js/ValidarRegistro.js"></script>
	<script src="views/js/ValidarIngreso.js"></script>
	<script src="views/js/ValidarCambio.js"></script>	
</body>

</html>