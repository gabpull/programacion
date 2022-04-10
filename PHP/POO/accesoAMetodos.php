<?php
    class Curso {
        public $publico = "Público: POO Avanzado I";
        private $privado = "Privado: POO Avanzado I";
        protected $protegido = "Público: POO Avanzado I";

        function mostrar(){
            return $this->privado;
        }
        
    }

    $prueba = new Curso();
    echo "<p>".$prueba->publico."</p>";
    echo "<p>".$prueba->mostrar()."</p>";    

    echo "Clase";

        


     


?>