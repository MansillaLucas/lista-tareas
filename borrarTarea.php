<?php

//Obtiene la conexion y traer tareas
require_once "conexion.php";
$conexion = new conexionBase();
$tareas = $conexion->consultar("SELECT * FROM `tareas`");

if($_POST){

    $idBorrado = $_POST['delete'];
    $sql="DELETE FROM `tareas` WHERE `id` = $idBorrado";
    $conexion->ejecutar($sql);

}

header("location:contenido.php");

?>