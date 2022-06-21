<?php

$nombre = "";
if($_POST){
    $nombre = $_POST["nombre"];
}

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

<form method="POST">
    <h3>Por favor, ingrese su nombre:</h3>
    <input type="text" name="nombre" id="" value="<?= $nombre; ?>">
    <input type="submit" value="submit">
</form>

<?= $nombre; ?>

</body>
</html>