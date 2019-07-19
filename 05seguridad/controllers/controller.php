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

				/*preg_matc = Realiza una comparacion con una expresion regular  
				  
				*/
			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioRegistro"]) && 
			   preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordRegistro"]) &&
			   preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$_POST["emailRegistro"])){

					/*crypt() devolverá el hash de un string utilizando el algoritmo estándar basado en DES de Unix o algoritmos alternativos que puedan estar disponibles en el sistema. */

				$encriptar = crypt($_POST["passwordRegistro"],'$2a$07$usesomesillystringforsalt$');

					$datoscontroller = array("usuario"=>$_POST["usuarioRegistro"],
									"password"=>$encriptar,
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
	}

		#Ingreso de usuarios
	#=======================================

	public function ingresoUsuarioController(){

		if (isset($_POST["usuarioIngreso"])){

			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && 
					preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordIngreso"])){
					
						
					$encriptar = crypt($_POST["passwordIngreso"],'$2a$07$usesomesillystringforsalt$');

					$datoscontroller = array("usuario"=>$_POST["usuarioIngreso"],
									"password"=>$encriptar);

					$respuesta = Datos::ingresoUsuraioModel($datoscontroller,"usuarios");
					
<<<<<<< HEAD
					$intentos = $respuesta["intentos"];
					$usuarios = $_POST["usuarioIngreso"];
					$maximointentos = 2;	
					
					if ($intentos < $maximointentos){

					
						if ($respuesta["usuario"]== $_POST["usuarioIngreso"] && 
							$respuesta["password"]== $encriptar ) {
							session_start();	
							$_SESSION["validar"] = true;
							header("location:index.php?action=usuarios");	

							$intentos = 0;
								
							$datosController = array("usuarioactual"=>$usuarios, "ActualizarIntentos"=>$intentos);
							
							$respuestaActualizarIntentos = Datos::intentosUsuariosModel($datosController,"usuarios");
														

						}
						else{
								$intentos++;
								
								$datosController = array("usuarioactual"=>$usuarios, "ActualizarIntentos"=>$intentos);
								
								$respuestaActualizarIntentos = Datos::intentosUsuariosModel($datosController,"usuarios");

								header("location:index.php?action=fallo");	

							}
					}
					else{

						++$intentos;
								
						$datosController = array("usuarioactual"=>$usuarios, "ActualizarIntentos"=>$intentos);
						
						$respuestaActualizarIntentos = Datos::intentosUsuariosModel($datosController,"usuarios");
						
						header("location:index.php?action=fallointentos");	

=======
					if ($respuesta["usuario"]== $_POST["usuarioIngreso"] && 
					$respuesta["password"]== $encriptar ) {
					session_start();	
					$_SESSION["validar"] = true;
					header("location:index.php?action=usuarios");	
					

					}
					else{

						header("location:index.php?action=fallo");	
>>>>>>> dbf1059f086cdf6e3795f9951f0b4fff723c0581

					}
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

			<input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar"  id="usuarioEditar" required>
		
			<input type="text" value="'.$respuesta["password"].'" name="passwordEditar" id="passwordEditar" required>
		
			<input type="email" value="'.$respuesta["email"].'" name="emailEditar"  id="emailEditar"required>
		
			<input type="submit" value="Actualizar">';
	}

		#Actualizar usuarios
	#=======================================	

	public function actualizarusuarioController(){

		if (isset($_POST["usuarioEditar"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioEditar"]) && 
			preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordEditar"]) &&
			preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$_POST["emailEditar"])){


					$encriptar = crypt($_POST["passwordEditar"],'$2a$07$usesomesillystringforsalt$');


					$datoscontroller = array("id"=>$_POST["idEditar"],
									"usuario"=>$_POST["usuarioEditar"],
									"password"=>$encriptar,
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