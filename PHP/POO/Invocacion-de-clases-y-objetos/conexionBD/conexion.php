<?php
   function conexionBD(){
    try {
      $cadena = 'mysql:host=localhost;dbname=contacts_app';
      $conexion = new PDO($cadena, 'root', '');

      return true;
      
    } catch (PDOException $e) {
      echo "Error: ". $e->getMessage();
    }



   }
?>  
