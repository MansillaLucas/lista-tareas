<?php

//Obtiene la conexion y traer tareas
require_once "conexion.php";
$conexion = new conexionBase();
$tareas = $conexion->consultar("SELECT * FROM `tareas`");

if($_POST){

    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];
    $tiempo = date('Y-m-d');
    $sql="INSERT INTO `tareas`(`tema`, `descripcion`, `fechaCreacion`, `estado`) VALUES ('$tema','$descripcion','$tiempo','Comenzado')";
    $conexion->ejecutar($sql);

}

header("location:contenido.php");

?>