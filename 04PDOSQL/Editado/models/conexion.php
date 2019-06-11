<?php

class conexion{

    public function conectar(){

<<<<<<< HEAD
        $link = new PDO("mysql:host=localhost;dbname=cursophp","root","123456");
=======
        $link = new PDO("mysql:host=localhost;dbname=cursophp","root","");
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121
        
        return $link;
    }

}


?>