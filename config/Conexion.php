<?php

class Conexion {
    public static function getConexion(): PDO {
        $dns = "mysql:host=localhost;port=3306;dbname=" . DBNAME;
        $conexion = null;
        try{
            $conexion = new PDO($dns, DBUSER, DBPASSWORD);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
           echo $e;
           die("<br><p style='color:red;'>Error: ". $e->getMessage());
        }
        return $conexion;
    }
}