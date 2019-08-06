<?php

require_once "../../controllers/controller.php";
require_once "../../models/crud.php";

class Ajax{

    public $validarUsuario;
<<<<<<< HEAD
    public $validarEmail;
    public function validarUsuariosAjax(){

        $datos = $this->validarUsuario;

        $respuesta = MvcController::validarUsuarioController($datos);
        
        echo  $respuesta;
    }

    public function validaremailAjax(){

        $datos = $this->validarEmail;

        $respuesta = MvcController::validarEmailController($datos);
        
        echo  $respuesta;
    }


}
if (isset($_POST["validarUsuario"])){
    $a = new Ajax();
    $a -> validarUsuario = $_POST["validarUsuario"];
    $a -> validarUsuariosAjax();
}
if (isset($_POST["validarEmail"])){
    $b = new Ajax();
    $b -> validarEmail = $_POST["validarEmail"];
    $b -> validaremailAjax();
}
=======

    public function validaeUsuariosAjax(){

        $datos = $this->validarUsuario;

       # $respuesta = MvcController::validarUsuarioController($datos);
        
        echo $datos;
    }



}
$a = new Ajax();
$a -> validarUsuario = $_POST["validarUsuario"];
$a -> validaeUsuariosAjax();
>>>>>>> b2c01f537c11db040b9113131562d67b4508f05b
