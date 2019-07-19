<?php

class enlacespaginas{


    public function enlacespaginasModelos($enlacesModel){

        if($enlacesModel=="servicios"||
           $enlacesModel=="contactenos"|| 
           $enlacesModel=="nosotros"  ){
            

            $module = "view/modules/".$enlacesModel.".php";

        }
        else if($enlacesModel=="index"){

            $module = "view/modules/inicio.php";
        }
        else{

            $module = "view/modules/inicio.php";

        }
        return $module;


    }



}


?>