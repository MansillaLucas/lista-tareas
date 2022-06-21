<?php

$json='{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';

$arreglo = json_decode($json,true);
foreach($arreglo as $a=>&$c){
    echo $a.": ".$c."<br>";
}

?>