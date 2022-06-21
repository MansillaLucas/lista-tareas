<?php

for($i=1;$i<=6;$i++){

    for($j=1;$j<=6;$j++){
        echo str_pad($i*$j,6," ",STR_PAD_RIGHT);
    }

    echo "<br>";

}

?>