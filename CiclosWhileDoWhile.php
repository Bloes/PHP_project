<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Ciclo while</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden los ciclos
             * while y do-while
             */
            $a = 1; //Se inicializa una variable de control
            while ($a <= 5) { //Se pone la condición de finalización
                echo "$a <br />"; //Se ejecuta una rutina
                $a++; //Se modifica la variable de control
            }
            ?>
        </p>
        <p>
        <h3>Modifique el ejemplo anterior para que el ciclo while muestre los mismos números en orden inverso.</h3>
        <?php
        $a=5;
        while ($a >= 1){
            echo "$a <br />";
            $a--;
        }
        ?>
        </p>
        <h3>Ciclo do-while</h3>
        <p>
            <?php
            /* Este programa solo mostrará el número 6 ya que
             * no se devuelve la variable $a a un valor menor que 5 por lo tanto
             * se muestra el ultimo valor luego de la ejecución del ciclo
             * anterior, se evalua la condición y puesto que no se cumple no se
             * itera de nuevo
             */
            do {
                echo "$a <br />"; //Se ejecuta una rutina
                $a++; //Se modifica la variable de control
            } while ($a <= 5)//Se pone la condición de finalización
            ?>
        </p>
    </body>
</html>
