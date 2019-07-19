<?php 

class MvcController {

    #LLamado d ela plantilla  
    #******************************************************************************************
    public function pagina(){
        # se usa este include para  incluir  la vista que  contiene  el codigo html
        include "view/template.php";

    }

    #Interaccion de usuario
    #******************************************************************************************

    public function enlacespaginasController(){

            if (isset($_GET["action"])){

                $enlacesontroller = $_GET["action"];


            }
            else{
            
                $enlacesontroller = "index";
            }
            $respuesta = Paginas::enlacespaginasModelos($enlacesontroller);

            include $respuesta;

    }



}



?>