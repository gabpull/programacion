<?php
    #Interfaces - interface - implements
    interface Requerimiento{
        public function asignarRequerimiento($listado);
        public function obtenerRequerimiento();
    }
    interface Conocimiento{
        public function asignarConocimiento($listado);
        public function obtenerConocimiento(); 
    }

     class Curso implements Requerimiento, Conocimiento{
         private  $titulo;
         private  $profesor;
         private  $duracion;
         private  $costo;
         private  $disponible;
         private  $listado;

         #Atributo estático
         public static $moneda = 'USD';

        #Creando el constructor
        public function __construct($titulo, $profesor, $duracion, $costo, $disponible) {
            $this->titulo = $titulo;
            $this->profesor = $profesor;
            $this->duracion = $duracion;
            $this->costo = $costo;
            $this->disponible = $disponible;     
        }

        #Destructor
        /*public function __destruct(){
            echo "Destruyendo ".$this->titulo."<br>";            
        }*/

        
        #Encapsulación
        #Getter
        public function obtenerTitulo(){
            return $this->titulo;
        }

        public function obtenerProfesor() {
            return $this->profesor;
        }

        #Setter
        public function asignarTitulo($tl){
            $this->titulo = $tl;
        }

        #implementar las funciones de las interfaces
        public function asignarRequerimiento($listado){
            $this->listado = $listado;
        }
        public function obtenerRequerimiento(){
            if(!empty($this->listado)){
                foreach($this->listado as $lista){

                    echo "<P>".$lista."</p>";
                }
            }
        }

        public function asignarConocimiento($listado){
            
        }

        public function obtenerConocimiento(){
            
        }

        static function obtenerDenominacion(){
            return self::$moneda;
        }









     }
?>