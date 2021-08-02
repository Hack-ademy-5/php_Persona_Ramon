<?php
class Estudiante extends Persona{
    private $curso;

    public function __construct($nombre, $apellido, $edad, $curso){
        parent:: __construct($nombre, $apellido, $edad);
        $this->curso = $curso;
    }
}