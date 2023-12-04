<?php

class LoginModel extends Database
{
    public function login()
    {
        $user = $_POST["user"];
        $password = $_POST["password"];

        $query = "SELECT * FROM user WHERE nama = '$user'";
        $hasil = $this->query($query);

        if (mysqli_num_rows($hasil) === 1) {
            $row = mysqli_fetch_assoc($hasil);
            if (password_verify($password, $row['password'])) {
                return true;
            }
        }
    }
}
