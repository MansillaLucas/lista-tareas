<?php

    $personas = array(array("nombre"=>"Lalo", "edad"=>39),
    array("nombre"=>"Hector", "edad"=>71),
    array("nombre"=>"Alberto", "edad"=>10));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($personas as $p){ ?>
            <tr>
                <td><?= $p["nombre"]; ?></td>
                <td><?= $p["edad"]; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>