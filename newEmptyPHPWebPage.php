<!DOCTYPE html>
<?php
    $lista = array(array("f","h",5),
                   array("hd",56))
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border=1 width=40% style="margin: 0 auto;">
            <tr>
                <th>LETRAS</th>
                <th>NUMEROS</th>
            </tr>
            <?php
            for($i=0;$i<count($lista);$i++){?>
            <tr>
                <th><?php echo $lista[$i][0]?></th>
                <th><?php echo $lista[$i][1]?></th>
            </tr>
            <?php }
            ?>
            

    </body>
</html>
