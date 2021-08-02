<?php
class Persona{
    protected $nombre;
    protected $apellido;
    protected $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function saludar(){
        echo "Hola soy $this->nombre $this->apellido y tengo $this->edad años\n";
    }
}