<?php

$cadena = "green eggro";

function devolverPrimero($cadena){

    $candidato = null;

    for($i=0;$i<strlen($cadena);$i++){
        if (substr_count($cadena, substr($cadena, $i, 1)) == 1) {
            return substr($cadena, $i, 1);
        }
    }

}



?>