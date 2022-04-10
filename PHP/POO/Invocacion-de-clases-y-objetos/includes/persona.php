<?php
     class Persona{
        public $nombre;
        public $apellido;
        public $email;

        public function __construct($nombre, $apellido, $email){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
        }

        public function bienvenida (){
            return "Bienvenido {$this->nombre} a Ed Team";
            //return "Bienvenido ".$this->nombre." a Ed Team";
        }

        final public function despedida(){
            return "Hasta pronto {$this->nombre}";
        }

     }
?>