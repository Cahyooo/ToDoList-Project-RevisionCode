<?php

class RegisterController extends Controller
{
    public function __construct()
    {
        $data = [
            "userSama" => '',
            "passwordBeda" => ''
        ];

        if (isset($_POST["register"])) {
            $data = $this->register();
        }
        App::checkSession(true, "index");
        $this->view('register', $data);
    }

    public function register()
    {
        $auth = $this->model("RegisterModel")->register();
        if (is_null($auth['userSama']) && is_null($auth['passwordBeda'])) {
            // Jika Berhasil
            echo '<script>alert("Registrasi Berhasil!");</script>';
            header("location:" . BASEURL . "/login.php");
            exit;
        } else if ($auth['userSama'] == 'errorUser' && is_null($auth['passwordBeda'])) {
            return [
                "userSama" => "error",
                "passwordBeda" => ''
            ];
        } else if (is_null($auth['userSama']) && $auth['passwordBeda'] == 'errorPassword') {
            return [
                "userSama" => '',
                "passwordBeda" => "error"
            ];
        }
    }
}
