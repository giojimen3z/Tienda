<?php

require_once "../../controllers/controller.php";
require_once "../../models/crud.php";

class Ajax{

    public $validarUsuario;
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