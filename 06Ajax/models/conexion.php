<?php

class conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=cursophp","root","123456");
        
        return $link;
    }

}


