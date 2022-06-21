<?php

//Obtiene la conexion y traer tareas
require_once "conexion.php";
$conexion = new conexionBase();
$tareas = $conexion->consultar("SELECT * FROM `tareas`");

if($_POST){

    $idCambioEstado = $_POST['advance'];

    switch($_POST['estado']):
        case "Comenzado":
            $sql="UPDATE `tareas` SET `estado`='Avanzado' WHERE `id`=$idCambioEstado";
            break;
        case "Avanzado":
            $sql="UPDATE `tareas` SET `estado`='Finalizado' WHERE `id`=$idCambioEstado";
            break;
        default:
            $sql="";
            break;
    endswitch;
    
    $conexion->ejecutar($sql);

}

echo $idCambioEstado;

header("location:contenido.php");

?>