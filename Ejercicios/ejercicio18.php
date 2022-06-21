<?php

$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$suma = array_sum($temps);
//$temps = array_unique($temps);

echo "Temperatura promedio: ".$suma/count($temps)."<br>";

sort($temps);
echo "Las temperaturas mas bajas son: ";
for($i=0;$i<5;$i++){
    echo $temps[$i]." ";
}
echo "<br>";

rsort($temps);
echo "Las temperaturas mas altas son: ";
for($i=0;$i<5;$i++){
    echo $temps[$i]." ";
}
echo "<br>";

?>