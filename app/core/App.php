<?php

class App
{
    public function __construct()
    {
        $page = ['index.php', 'login.php', 'register.php', 'hapus.php'];
        $filename = basename($_SERVER['PHP_SELF']);
        if ($filename == $page[0]) {
            require_once '../app/controller/TodoListController.php';
            new TodoListController;
        } else if ($filename == $page[1]) {
            require_once '../app/controller/LoginController.php';
            new LoginController;
        } else if ($filename == $page[2]) {
            require_once '../app/controller/RegisterController.php';
            new RegisterController;
        }
    }

    public static function checkSession($bool, $locate) {
        session_start();
        if (isset($_SESSION['login']) == $bool) {
            header("Location: $locate.php");
            exit;
        }
    }
}
