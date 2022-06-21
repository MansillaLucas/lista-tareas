<?php

$cadenaCompleta = "Esto es un texto"; //16
$cCompTamaño = strlen($cadenaCompleta);
$cadena = "tos";
$cTamaño = strlen($cadena);

if($cTamaño <= $cCompTamaño){

    //Total cadena - los digitos donde empezaría la busqueda
    $inicio = $cCompTamaño - $cTamaño;
    $cadenaUltimas = substr($cadenaCompleta,$inicio, $cTamaño);

    echo "Cadena principal:".$cadenaCompleta."<br>";
    echo "Cadena a buscar:".$cadena."<br>";
    echo "Cantidad de caracteres a buscar:".$cTamaño."<br>";
    echo "Últimas posiciones de la cadena:".$cadenaUltimas."<br><br>";

    if($cadenaUltimas == $cadena){
        echo "Se encuentra en las últimas posiciones de la cadena principal";
    }
    else{
        echo "La cadena otorgada no encuentra en las últimas posiciones de la cadena principal";
    }
    

}
else{
    echo "La segunda cadena es mayor a la cadena principal";
}

?>