<?php
$paises= array('mexico','rd','japon','corea');
foreach($paises as $pais){
    echo $pais.'<br>';
    if($pais == 'rd'){
        break;
    }
}

?>