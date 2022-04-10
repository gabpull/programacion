<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Avanzado I</title>
</head>
<body>
    <?php

        require __DIR__ . '/includes/global.php';
         //define('INC', '/includes/');
         //require_once __DIR__ . INC . 'curso.php';
        /*
         $curso1 = new Curso('POO en PHP', 'Gabriel', '3 sesiones', 10, true);
         $curso2 = new Curso('JavaScript', 'Gabriel', '4 sesiones', 0, true);
         echo $curso1->obtenerTitulo()."<br>";
         echo $curso1->obtenerProfesor()."<br>";
         $curso1->asignarTitulo('POO en PHP AAA');
         echo $curso1->obtenerTitulo()."<br>";
         $curso1->asignarRequerimiento(['PHP desde cero', 'Conocimientos básicos de PHP', 'Ganas de aprender', 'Prácticas']);
         echo "<h3>Mis requerimientos para la clase</h3>";
         $curso1->obtenerRequerimiento();

         echo "<br>";
         echo '<hr width=”75%" color=”black”/>';
        */
        #Instanciar un estudiante
        $estudiante = new Estudiante('Carlos', 'Alvarado', 'carlosA@gmail.com');

        //var_dump($estudiante);
        echo $estudiante->bienvenida();

        #Instanciar un profesor
        $profesor = new Profesor('Jon', 'Mircha', 'Mircha@gmail.com');
        echo "<br>";
        //var_dump($profesor);
        echo $profesor->bienvenida();


    ?>
    
    
</body>
</html>