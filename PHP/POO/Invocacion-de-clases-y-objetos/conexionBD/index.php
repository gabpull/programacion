<?php
   
   echo "<h1>Base de datos con PHP</h1>";

   require_once __DIR__. '/conexion.php';

   $conecta = conexionBD();
   if ($conecta == true){
     echo "<h3>Estamos conectados a la Base de Datos</h3>";
   }


?>
