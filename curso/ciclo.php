<?php
//ciclo for

// for($i = 1; $i <= 10; $i++){
//     echo "hola <br>";
// }

//ciclo while

// $x = 20;
// while($x >= 1){
//     echo $x . '<br>';
//     $x--;
// }

// recorrer arreglos mediante for y while

// $meses = array(
//     'enero',
//     'febrero',
//     'marzo',
//     'abril',
//     'mayo',
//     'junio',
//     'julio',
//     'agosto',
//     'Septiembre',
//     'Octubre',
//     'Noviembre',
//     'Diciembre'
// );
// for($i = 0; $i < count($meses) ; $i++){
//     echo $meses[$i]. '<br>';
// }

//ciclo foreach
$meses = array(
    'enero',
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
);

$alex = array('telefono' => '786767', 'edad' => 56, 'apellido' => 'perez','pais' => 'rd');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <h1>meses</h1>
    <ul> 
        <?php 
            // foreach($meses as $item){
            //     echo '<li>'.$item.'</li>';
            // }

            //foreach para recorrer arreglo asociativo
            foreach ($alex as $amigo => $valor){
                echo '<li>'.$amigo.' '.$valor.'</li>';
            }
        ?> 
    </ul>
</body>
</html>
