<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#===========================

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#===========================

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}
	#Registro de usuarios
	#=======================================

	public function registrousuariocontroller(){

		$datoscontroller = array("usuario"=>$_POST["usuario"],
						"password"=>$_POST["password"],
						"email"=>$_POST["email"]);
		
		
		$respuesta = Datos :: registroUsuraioModel($datoscontroller, "usuarios");

		echo $respuesta;
	}
}

?>