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

<<<<<<< HEAD
		if (isset($_POST["usuarioRegistro"])){
			$datoscontroller = array("usuario"=>$_POST["usuarioRegistro"],
							"password"=>$_POST["passwordRegistro"],
							"email"=>$_POST["emailRegistro"]);
			
			
			$respuesta = Datos::registroUsuraioModel($datoscontroller, "usuarios");

			if ($respuesta == "Success") {
				
				header("location:index.php?action=ok");
			}
			else{

				header("location:index.php");

			}
		}
	}

		#Ingreso de usuarios
	#=======================================

	public function ingresoUsuarioController(){

		if (isset($_POST["usuarioIngreso"])){
			$datoscontroller = array("usuario"=>$_POST["usuarioIngreso"],
							"password"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuraioModel($datoscontroller,"usuarios");
			
			if ($respuesta["usuario"]== $_POST["usuarioIngreso"] && 
			$respuesta["password"]== $_POST["passwordIngreso"] ) {
			 header("location:index.php?action=usuarios");	
			}
			else{

				header("location:index.php?action=fallo");	

			}
		}

=======
		$datoscontroller = array("usuario"=>$_POST["usuario"],
						"password"=>$_POST["password"],
						"email"=>$_POST["email"]);
		
		
		$respuesta = Datos :: registroUsuraioModel($datoscontroller, "usuarios");

		echo $respuesta;
>>>>>>> fb02ca8327b35184c1711f575a10c1047fb6c121
	}
}

?>