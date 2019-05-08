<?php
require_once "conexion.php";

/*Extension de clases:  los objetos pueden 
ser extendidos y pueden heredar propiedades y metodos. Para definir
una clase como extension debo definir una clase padre y se utiliza
dentro de una clase hija  



*/
class Datos extends conexion{

	#Registro de usuarios
	#=======================================
    
    public function registroUsuraioModel($datomodel, $tabla){
        /*
        prepare prepara una sentecia SQL  para ser ejecutada  por el metodo  PDOStatement:: Execute().la sentencia SQL 
        puede contener  cero o mas marcadores de parametro con nombre (:name)  o signos d einterrogacion  por los cuales 
        los  valores reales  seran sustituidos  cuando la sentencia  sea ejecutada. Ayuda a prevenir  inyecciones  SQL 
        eliminando la nescesidad  de entrecomillar  manualmente los parametros
        */
        $stmt = conexion::conectar()->prepare();



    }

s
}


?>