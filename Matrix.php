<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Incluir el archivo que contiene la función
        require_once 'functions.php';

// Arreglo bidimensional (matriz) con los datos
        $matrix = array(
                  array("Pepe", 2.5, "Estudiante"),
                  array("Ana", 3.8, "Estudiante"),
                  array("Carlos", 4.2, "Estudiante"),
                  array("María", 3.1, "Estudiante")
);

// Llamar a la función para mostrar la tabla
        display_matrix_as_table($matrix);
        ?>
    </body>
</html>
