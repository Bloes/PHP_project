<!DOCTYPE html>
<?php
$estudiante = array(array("Lau",5));

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRACTICANDO</title>
    </head>
    <body>
        <table border=1 width=60% style="margin: 0 auto;" cellspacing="5">
            <tr>
                <th>NOMBRE</th>
                <th>NOTA</th>
                <th>DEF</th>
            </tr>
            <?php
            foreach ($estudiante as $value) {
                echo '<tr>';
                echo "<td>$value[0]</td>";
                if($value[1] > 3){
                    echo '<td> Aprobo </td>';
                }
                else{
                    echo '<td> No aprobo </td>';
                }
                echo "<td>$value[1]</td>";
                echo '</tr>';
                
            }
            ?>
            

    </body>
</html>
