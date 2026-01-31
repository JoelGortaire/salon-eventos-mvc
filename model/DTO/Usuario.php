<?php
//autor: Samuel Vera
class Usuario{

    private $id, $usuario, $clave, $rol, $estado, $fecha_creacion, $fecha_actualizacion;

    public function __construct(){

    }
    public function getId(){
        return $this->id;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getClave(){
        return $this->clave;
    }
    public function getRol(){
        return $this->rol;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getFecha_creacion(){
        return $this->fecha_creacion;
    }
    public function getFecha_actualizacion(){
        return $this->fecha_actualizacion;
    }
    
}




