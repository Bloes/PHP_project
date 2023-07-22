<!DOCTYPE html>
<?php
$datos = array(array("Edilma","Calle 45g#18-44","315756489","05/11/1972","Azul","cielo"),
               array("Brandon","Calle 95e#56-45","315756456","15/02/1996","rojo","volcan"),
               array("Stiven","Calle 100f#20-44","316756474","16/09/2000","amarillo","sol"));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border=1 width=80% style="margin: 0 auto;" cellspacing="5">
            <tr>
                <th>NOMBRE</th>
                <th>DIRECCIÓN</th>
                <th>TELEFONO</th>
                <th>CUMPLEAÑOS</th>
                <th>COLOR</th>
                <th>SIGNIFICADO</th>
            </tr>
            <?php
            foreach ($datos as $value) {?>
            <tr>
                <th><?php echo $value[0]?></th>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
                <td><?php echo $value[3]?></td>
                <th><?php echo $value[4]?></th>
                <th><?php echo $value[5]?></th>
            </tr>
            <?php }
            ?>
            <?php
            foreach ($datos as $value) {
        echo '<tr>';
        if ($value[4] === 'rojo') {
            echo '<tr style="background-color: red;">';
        } elseif ($value[4] === 'amarillo') {
            echo '<tr style="background-color: yellow;">';
        } else {
            echo '<tr style="background-color: blue;">';
        }
        foreach ($value as $dato) {
            echo "<td>$dato</td>";
        }
        echo '</tr>';
            }
            ?>
            
    </body>
</html>
