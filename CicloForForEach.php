<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Ciclo for</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden los ciclos
             * for y foreach
             */
            for ($i = 1; $i <= 5; $i++) { //Se ponen todas las condiciones del ciclo
                echo "$i <br />"; //Se ejecuta una rutina
            }
            ?>
        </p>
        <h3>Ciclo foreach</h3>
        <p>
            <?php
            /* Puesto que el ciclo foreach fue creado para recorrer arreglos
             * lo primero que se requiere es tener un arreglo con información
             */
            $arregloAnimales = array(
                "Perro",
                "Gato",
                "Conejo",
                "Liebre",
                "Tortuga"
            );
            foreach ($arregloAnimales as $animal) {
                echo "$animal <br />";
            }
            ?>
    </body>
</html>
