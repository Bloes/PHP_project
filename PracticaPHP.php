<!DOCTYPE html>
<?php
    $lista=array("one","two","three","four","five")
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ol>
            <?php
            foreach ($lista as $value) {
                echo "<li>".$value."</li>";
            }
            ?>
        </ol>
    </body>
</html>
