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
$numeros = array(12,123,1234,12345,12346);
rsort($numeros)
// sort($meses);//ordenar de forma alfabetica
// rsort($meses);//de forma inversa
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
                foreach($numeros as $numero){
                    echo '<li>' . $numero  . '</li>';
                }
            ?>
        </ul>
    </body>
</html>
