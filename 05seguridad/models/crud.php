<?php
require_once "models/conexion.php";
//require_once "../controller/controller.php";

/*Extension de clases:  los objetos pueden 
ser extendidos y pueden heredar propiedades y metodos. Para definir
una clase como extension debo definir una clase padre y se utiliza
dentro de una clase hija  



*/
class Datos extends conexion{

	#Registro de usuarios
	#=======================================
    
    public function registroUsuraioModel($datosModel, $tabla){

        /*
            #prepare Prepara una sentencia SQL que sera  ejecutada  por el metodo PDOSStatement::
            Execute(). La sentencia SQL puede contener 0 o mas marcadores   de parametros con nombre 
            (:name) o signos de interrogacion(?) por los cuales los  valores reales seran 
            sustituidos cuando la sentencia sea ejecutada. ayuda a previnir  inyecciones SQL
              eliminando la nescesidad  de entrecomillar manualmente los parametros
        */

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES (:usuario,:password,:email)");

        /*bindParam() Vincula  una  variable PHP  aun  parametro de sustitucion con nombre o 
        signo de interrogacion correspondiente de la sentencia SQL  que  fue usada para
         preparar la sentencia.
        */
        

        $stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password",$datosModel["password"], PDO::PARAM_STR);
        $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
        
       
      

        if($stmt->execute()) {

            return "Success";
        }    
        else   { 
            return "error";
        }

        $stmt->close();
    }
#INGRESO USUARIOS
#----------------------------------------
public function ingresoUsuraioModel($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("SELECT  usuario, password, intentos FROM $tabla WHERE usuario = :usuario");
    $stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);

    $stmt->execute();

    #fetch(): Obtiene una fila de un conjunto de resultados  asociado al  objetoPDOSStatement

    return  $stmt->fetch();

    $stmt->close();
}

#INTENTOS USUARIOS
#----------------------------------------
public function intentosUsuariosModel($datosModel, $tabla){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");
    
    $stmt->bindParam(":intentos",$datosModel["ActualizarIntentos"], PDO::PARAM_INT);
    $stmt->bindParam(":usuario",$datosModel["usuarioactual"], PDO::PARAM_STR);
   

    if($stmt->execute()) {

        return "Success";
    }    
    else   { 
        return "error";
    }

    $stmt->close();
}

#VISTA USUARIOS
#----------------------------------------
public function vistaUsuariosModel($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT  id,usuario, password,email FROM $tabla");
    $stmt->execute();

    #fetchAll(): Obtiene todas las filas de un conjunto de resultados  asociado al  objetoPDOSStatement
    

    return  $stmt->fetchAll();
    $stmt->close();
}

#EDITAR USUARIOS
#----------------------------------------
public function editarusuarioModel($datosModel,$tabla){

    $stmt = Conexion::conectar()->prepare("SELECT  id,usuario, password,email FROM $tabla  WHERE id = :id ");
    $stmt->bindParam(":id",$datosModel, PDO::PARAM_STR);
    $stmt->execute();

    

    return  $stmt->fetch();

    $stmt->close();
}


#Actualizar USUARIOS
#----------------------------------------
public function actualizarUsuraioModel($datosModel,$tabla){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password, email = :email WHERE id = :id");
    
    $stmt->bindParam(":id",$datosModel["id"], PDO::PARAM_INT);
    $stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":password",$datosModel["password"], PDO::PARAM_STR);
    $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
    

    if($stmt->execute()) {

        return "Success";
    }    
    else   { 
        return "error";
    }

    $stmt->close();



}

public function BorrarUsuarioModel($datosModel,$tabla){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE  id = :id");    

    $stmt->bindParam(":id",$datosModel, PDO::PARAM_INT);


    if($stmt->execute()) {

        return "Success";
    }    
    else   { 
        return "error";
    }

    $stmt->close();

}

}


?>