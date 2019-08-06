<?php

class conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=cursophp","root","");
        var_dump($link);
    }

}
$a = new conexion();
$a -> conectar(); 

?>