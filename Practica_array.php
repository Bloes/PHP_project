<!DOCTYPE html>
<?php
    $lista=array(array("Barranquilla","Cartagena"),
                 array("Santa Marta", "Valledupar"),
                 array("Sincelejo", "Monteria"))
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td>Table1</td>
                <td>Table2</td>
            </tr>
            <?php
            for ($i=0;$i<count($lista);$i++){?>
            <tr>
                <td><?php echo $lista[$i][0]?></td>
                <td><?php echo $lista[$i][1]?></td>
                
            </tr>
            <?php }
            ?>
    </body>
</html>
