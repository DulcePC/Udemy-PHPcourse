<?php

$meses = array (
    'enero',
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8">
        <title>Mes del anio</title>
    </head>
    <body>
        <h1>Meses</h1>
        <ul>    
            <?php
                foreach($meses as $mes){
                    echo '<li>' . $mes  . '</li>';
                }
            ?>
        </ul>
    </body>
</html>
