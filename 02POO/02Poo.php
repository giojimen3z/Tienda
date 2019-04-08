<?php



/*
Clase:  Es un modelo para crear objetos que comparten un mismo comportamiento
mismo estado e identidad
*/

class Automovil{

    /*Propiedades
       son las caracteristicas que pueden tener un objeto
    */
    
    /*
        Metodo
        es un algoritmo asociado a un objeto  que indica la capacidad de lo que se puede hacer
    
    */
    public $marca;
    public $modelo;

    public  function mostrar(){
        
       echo  "<p>Hola soy un $this->marca , modelo $this->modelo </p>";
 
    }

}
/* OBJETO

es una entidad provista de metodos o mensajes a los cuales  responden propiedades con valores
concretos



Principios POO


Abstraccion : nuevos tipos de datos(el que yo quiera, yo lo creo)
Encapsulacion: organizar el  codigo en grupos logicos
Ocultamiento:  ocultar detalles de implementacion y exponer  solo los detalles que 
            sean nescesarios para el resto del sistema
*/


$a = new Automovil();

$a -> marca ="Toyota";
$a -> modelo ="Corola";
$a -> mostrar();

$b = new Automovil();

$b -> marca ="Hiunday";
$b -> modelo ="Accent Vision";
$b -> mostrar();


?>