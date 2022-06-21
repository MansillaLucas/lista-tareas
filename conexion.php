<?php

class conexionBase{

    public $baseConn="localhost:3306";
    public $usuario="root";
    public $contrasenia="";
    public $baseName="portafolio";
    public $conexion;

    public function __construct(){
        try{
            $this->conexion = new PDO("mysql:host=$this->baseConn; dbname=$this->baseName",$this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión establecida";
        }
        catch(PDOException $e){
            return "Falló la conexión: ".$e;
        }
    }

    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

}

?>