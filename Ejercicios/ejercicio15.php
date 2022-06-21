<?php

$x = array(1, 2, 3, 4, 5);
print_r($x);
echo "<br>";

unset($x[3]);
print_r($x);
echo "<br>";

$x = array_values($x);
print_r($x);

?>