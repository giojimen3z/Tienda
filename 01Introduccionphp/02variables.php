<?php


#variable numerica

$numero = 5;
echo "esto es  un munero: $numero <br>";
var_dump($numero);
#Variable texto

$palabra = "palabra";

echo "<br><br>","esto es  una palabra: $palabra <br>";

var_dump($palabra);

#Variable Booleana

$boleana = true;

echo "<br><br>","esto es  una variable boleana: $boleana <br>";
var_dump($boleana);
#Variable Arreglo

$colores = array("Rojo","Amarillo");

echo "<br><br>","esto es  una variable arreglo: $colores[1] <br>";
var_dump($colores);
#Variable Arreglo con propiedades

$verduras = array("verdura1"=>"lechuga","verdura2"=>"Cebolla");

echo "<br><br>","esto es  una variable arreglo con propiedades: $verduras[verdura1] <br>";
var_dump($verduras);
#Variable Objetos

$frutas = (object)[
        "fruta1"=>"pera",
        "fruta2"=>"Manzana"
    
    ];

echo "<br><br>","esto es  una variable objeto: $frutas->fruta1 <br>";
var_dump($frutas);
?>