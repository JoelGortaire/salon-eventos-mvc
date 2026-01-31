<?php
//autor: Samuel Vera
require_once 'config/Conexion.php';
class UsuarioDAO
{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function getCredenciales($usuario)
    {
        try {
            $sql = "SELECT u.usuario, u.clave, u.estado, u.rol_id, r.nombre 
                    FROM usuarios u 
                    INNER JOIN roles r ON u.rol_id = r.id 
                    WHERE u.usuario = :usuario AND u.estado = 1";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            return null;
        }
    }

}