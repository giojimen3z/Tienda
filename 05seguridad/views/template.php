<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

	<link rel="stylesheet" type="text/css" href="views/modules/estilos.css">  	
	<script src="views/js/ValidarRegistro.js"></script>
</head>

<body>

<?php include "modules/navegacion.php"; ?>


<section>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

 ?>

</section>
	
</body>

</html>