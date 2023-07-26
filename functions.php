// functions.php

<?php
function display_matrix_as_table($matrix) {
    echo '<table border="1" style="border-collapse: collapse;">';

    foreach ($matrix as $row) {
        echo '<tr>';
        foreach ($row as $data) {
            echo '<td>' . $data . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}
?>