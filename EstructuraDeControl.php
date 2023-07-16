<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Ejemplo de codicionales anidados:</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden usar las estructuras
             * condicionas del PHP
             */
            $a = 3;
            $b = 4;
            if ($a >= 3) {
                echo "La variable \$a es mayor o igual que 3 <br />";
            if ($b >= 4) {
                echo "La variable \$b es mayor o igual que 4";
                }
            }
            ?>
        </p>
        <h3>Ejemplo de condicionales multiples:</h3>
        <p>
            <?php
            $a = 2;
            if ($a > 3) {
                echo "La variable \$a es mayor que 3 <br />";
            } elseif ($a < 3) {
                echo "La variable \$a es menor que 3 <br />";
            } else {
                echo "La variable \$a es igual a 3 <br />";
            }
            ?>
        </p>
        
    </body>
</html>
