<?php

    $list = array(1,1,2,2,3,4,5,5);
    $last = null;
    $cleanList = array();

    echo "<h3>Antes de limpiar</h3>";
    foreach($list as $l){
        echo $l."<br>";
        if($l == $last){
            continue;
        }
        else{
            array_push($cleanList,$l);
            $last = $l;
        }
    }

    echo "<h3>Después de limpiar(Sin función)</h3>";
    foreach($cleanList as $l){
        echo $l."<br>";
    }

    echo "<h3>Después de limpiar</h3>";
    unset($cleanList);
    $cleanList = array();
    $cleanList = array_unique($list);
    foreach($cleanList as $l){
        echo $l."<br>";
    }

?>