<?php 


#Funciones  sin parametros

function saludo(){

    echo "hola <br>";

}

saludo();

#Funciones con paremetros 


function despedida($adios){

echo $adios,"<br>";


}


despedida("chao");

#funciones con  retorno

function  retorno ($retornar){

return $retornar;

}

echo retorno("retornar"),"<br><br>"
?>