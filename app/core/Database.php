<?php

class Database
{
    private $servername = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $database = DB_NAME;

    public $conn;

    public function __construct()
    {
        $this->conn =  new mysqli($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
