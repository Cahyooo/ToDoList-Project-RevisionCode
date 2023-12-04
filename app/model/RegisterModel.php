<?php

class RegisterModel extends Database
{
    public function register()
    {
        $user = htmlspecialchars($_POST["username"]);
        $password = $_POST["password"];
        $confirmPass = $_POST["confirm"];

        $queryCekUser = "SELECT * FROM user WHERE nama = '$user'";
        $cekUser = $this->query($queryCekUser);

        if (mysqli_fetch_assoc($cekUser)) {
            $result = [
                'userSama' => 'errorUser',
                'passwordBeda' => null
            ];
        } else if ($password != $confirmPass) {
            $result = [
                'userSama' => null,
                'passwordBeda' => 'errorPassword'
            ];
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->query("INSERT INTO user VALUES('','$user','$password')");
            $result = [
                'userSama' => null,
                'passwordBeda' => null
            ];
        }

        return $result;
    }
}