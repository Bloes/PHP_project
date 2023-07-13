<!DOCTYPE html>

<html>
    <head>
        <title>Unidad 2 - Ejemplo 7</title>
        <meta http-equiv="Content-Type"
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <p><b>El valor de la comprar es: $</b>
            <?php
            $valor = 1000;
            echo "$valor";
            ?>
        </p>
        <p><b>M&aacute;s el IVA: $</b>
        <?php
        $valor = $valor * 1.16;
        echo "$valor"
        ?>
        </p>
        <p><b>M&aacute;nos el descuento de 5%: $</b>
        <?php
        $valor = $valor * 0.95;
        echo "$valor";
        ?>
        </p>
    </body>
</html>
