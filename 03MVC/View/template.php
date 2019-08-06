<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>template</title>
    <link rel="stylesheet" type="text/css" href="View/Modules/estilos.css">  
</head>
<body>

<header>    
    <h1> LOGO TIPO</h1>
</header>
<?php 

include "Modules/navegacion.php"

?>
<section>
<?php 

$mvc = new MvcController();
$mvc -> enlacespaginasController();


?>
</section>

</body>

</html>