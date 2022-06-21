<?php

    echo sumString("1646248");

    function sumString($digitos){

        $sum = 0;

        for($i=0;$i<strlen($digitos);$i++){
            $sum += $digitos[$i];
        }

        return $sum;

    }

?>