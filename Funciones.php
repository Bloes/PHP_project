<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FUNCIONES</title>
    </head>
    <body>
        <?php
        /* En este programa se presenta el funcionamiento de una función
         * simple, creada por el usuario
         */
        /* Inicialmente se escribió primero el llamado a la función antes que
         * su definición con el fin de demostrar que no importa donde se haga
         * el llamado de una función, si antes o despues de si declaración
         */
        imprimeTabla();
        /* La función imprimeTabla() genera una tabla HTML de 3 filas por 4
         * columnascon con una fila de encabezado que contien los titulos de
         * las columnas, la función no recibe argumentos ni devuelve valores
         */
        function imprimeTabla() {
        ?>
        <table border ="1" width=60% style="margin: 0 auto;">
                <thead>
                    <td>Nombre</td>
                    <td>Direcci&oacute;n</td>
                    <td>Tel&eacute;fono</td>
                    <td>Fecha de Nacimiento</td>
                </thead>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
            </table>
        <?php
        }
        ?>
    <tr>
        
        Modifique el código del ejemplo anterior escribiendo un nuevo llamado a la función después
        de su declaración, esto hará que la función se ejecute dos veces
        y por lo tanto aparecerán dos tablas en el navegador.
        
        <table border ="1" width=60% style="margin: 0 auto;">
                <thead>
                    <td>Nombre</td>
                    <td>Direcci&oacute;n</td>
                    <td>Tel&eacute;fono</td>
                    <td>Fecha de Nacimiento</td>
                </thead>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
            </table>
        
    </tr>
    </body>
</html>
