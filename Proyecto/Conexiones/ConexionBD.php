<?php
class Conexion{
    public static function IniciarConexion(){
        $conexion=new PDO("mysql:host=127.0.0.1;dbname=l20371034;charset=utf8", "l20371034", "VRU34+it34");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }
}
?>