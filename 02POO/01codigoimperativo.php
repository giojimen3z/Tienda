<?php


#Codigo imperativo o espagueti


$automovil1 = (object)[
    "marca"=>"Toyota", 
    "modelo"=>"Corola"];
$automovil2 = (object)[
    "marca"=>"Hyundai", 
    "modelo"=>"Accent vision"];

function mostrar($automovil){

    echo "<p>Hola soy un $automovil->marca , modelo $automovil->modelo </p>";

}

mostrar($automovil1);
mostrar($automovil2);
?>