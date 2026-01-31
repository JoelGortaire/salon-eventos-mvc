<?php
//autor: Samuel Vera
require_once 'model/DAO/UsuarioDAO.php';

class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsuarioDAO();
    }

    public function validar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!isset($_SESSION)) {
                session_start();
            }
            $user = !empty($_POST['usuario']) ? htmlspecialchars($_POST['usuario']) : '';
            $pass = !empty($_POST['clave']) ? htmlspecialchars($_POST['clave']) : '';

            $usuarioObj = $this->model->getCredenciales($user);

            if ($usuarioObj && $usuarioObj->clave === $pass) {
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['usuario'] = $usuarioObj->usuario;
                //$_SESSION['rol'] = $usuarioObj->nombre;  
                $_SESSION['rol_id'] = $usuarioObj->rol_id;

                header("Location: index.php");
                exit;
            } else {
                $_SESSION['mensaje'] = "Usuario o contraseña incorrectos.";
                header("Location: index.php");
                exit;
            }
        }
    }

    public function logout()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        header("Location: index.php");
        exit;
    }
}