<?php

class LoginController extends Controller
{
    public function __construct()
    {
        $data = ["error" => ''];

        if (isset($_POST["login"])) {
            $this->login();
            $data["error"] = '<p style="color: red; font-style: italic; margin:0; position:absolute; transform:translate(7vw,-1.5vw); text-align:center;font-size:0.9vw;transform: translate(6vw,-1.5vw);">Username / Password Salah!</p>';
        }
        App::checkSession(true, "index");
        $this->view('login',$data);
    }

    public function login()
    {
        $auth = $this->model("LoginModel")->login();
        if ($auth) {
            session_start();
            $_SESSION["login"] = true;
            header('Location: ' . BASEURL . '/index.php');
            exit;
        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . BASEURL . '/login.php');
        exit;
    }
}
