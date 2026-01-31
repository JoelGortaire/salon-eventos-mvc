<?php
//autor: Samuel Vera
class IndexController
{
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!empty($_GET['p'])) {
            $page = htmlspecialchars($_GET['p']);
            $filePath = 'view/estaticas/' . $page . '.php';
            if (file_exists($filePath)) {
                require_once $filePath;
            }
        } elseif (empty($_SESSION['usuario'])) {
            require_once 'view/estaticas/login.php';
        } else {
            require_once 'view/homeView.php';
        }
    }
}