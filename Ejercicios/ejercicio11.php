<?php 

$valores = array(24,95,102,48,73,56,99,36);
ordenarDesc($valores);

function ordenarDesc($values){

    rsort($values);
    for($i=0;$i<3;$i++){
        echo $values[$i]."<br>";
    }

}

?>