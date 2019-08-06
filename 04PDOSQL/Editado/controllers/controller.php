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
			 session_start();	
			 $_SESSION["validar"] = true;
			 header("location:index.php?action=usuarios");	
			 

			}
			else{

				header("location:index.php?action=fallo");	

			}
		}

	}

		#Vista de usuarios
	#=======================================	

	public function VistaUsuariosController()
	{
		$respuesta = Datos::vistaUsuariosModel("usuarios");
		
		foreach ($respuesta as $row => $item) {
		echo'<tr>
			
				
					<td>'.$item["usuario"] .'</td>
					<td>'.$item["password"] .'</td>
					<td>'.$item["email"] .'</td>
					<td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
					<td><a href="index.php?action=usuarios&idborrar='.$item["id"].'"><button>Borrar</button></a></td>
					
			</tr>';
		}	
	}

		#Editar usuarios
	#=======================================	

	public function editarusuarioController(){

		$datosController=$_GET["id"];
		$respuesta = Datos::editarusuarioModel($datosController,"usuarios");

		echo '	
			<input type="hidden"  value="'.$respuesta["id"].'" name="idEditar">

			<input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>
		
			<input type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>
		
			<input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>
		
			<input type="submit" value="Actualizar">';
	}

		#Actualizar usuarios
	#=======================================	

	public function actualizarusuarioController(){

		if (isset($_POST["usuarioEditar"])) {
			
			$datoscontroller = array("id"=>$_POST["idEditar"],
							"usuario"=>$_POST["usuarioEditar"],
							"password"=>$_POST["passwordEditar"],
							"email"=>$_POST["emailEditar"]);

			$respuesta = Datos::actualizarUsuraioModel($datoscontroller, "usuarios");
			
			if ($respuesta == "Success") {
				header("location:index.php?action=cambio");
			}
			else{
				echo "error";
			}
		}		

	}	
		#Borrar usuarios
	#=======================================
	public function BorrarUsuariosController(){

		if (isset($_GET["idborrar"])) {
			
			$datoscontroller = $_GET["idborrar"];
			$respuesta =  Datos::BorrarUsuarioModel($datoscontroller, "usuarios");
			
			if ($respuesta == "Success") {
				header("location:index.php?action=usuarios");
			}
			else{
				echo "error";
			}

		}				


	}
}

?>