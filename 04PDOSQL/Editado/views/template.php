<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="views/modules/estilos.css">  	
=======
	<link rel="stylesheet" type="text/css" href="Views/Modules/estilos.css">  	
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121

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