<?php
class Docente extends Persona{
    private $asignatura;

    public function __construct($nombre, $apellido, $edad, $asignatura){
        parent:: __construct($nombre, $apellido, $edad);
        $this->asignatura = $asignatura;
    }

    public function saludar(){
        echo"Hola, soy el/la profesor/a $this->nombre $this->apellido, tengo $this->edad años y doy clase de $this->asignatura\n";
    }
}