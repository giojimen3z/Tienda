<?php
/*  El Index: en el mostraremos la salida de las  vistas al usuario  y tambien atraves

de el enviaremos las distintas acciones que el usuario enie al controlador 

Require: establece que el codigo del archivo  invocado es requerido, es decir,obligatorio para el funcionamiento
del programa. Por ello si  el archivo especificado en la funcion require () no se  encuentra saltara  a unn error php fatal  error |
y el programa se detendra 

La version require_once() funciona d ela misma  forma  que ss respectivo, salvo que al utilizar  la version_once se impide la 
carga de un archivo  mas d euna vez 


si requerimos  el mismo codigo  mas de una vez corremos el riesgo de redeclaraciones de variables  funciones o clases


*/
require_once "Controllers/Controller.php";
require_once "Models/model.php";
$mvc = new MvcController();
$mvc -> plantilla();




?>