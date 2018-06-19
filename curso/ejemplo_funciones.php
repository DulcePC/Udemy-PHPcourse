<?php 
function calcular_area($base,$altura){
    $resultado = ($base * $altura) / 2;
    return $resultado;
}
echo calcular_area(10,10);
?>