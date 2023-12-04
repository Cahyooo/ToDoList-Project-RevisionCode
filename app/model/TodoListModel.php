<?php

class TodoListModel extends Database
{
    public function ambilData()
    {
        $query = "SELECT * FROM todolist";
        $result = $this->query($query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function tambah()
    {
        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $deadline = htmlspecialchars($_POST['deadline']);
        $prioritas = htmlspecialchars($_POST['prioritas']);
        $date = date("Y/m/d");

        $query = "INSERT INTO todolist VALUES ('','$judul','$deskripsi','$deadline','$prioritas','Not Completed','$date','$date')";
        $this->query($query);
    }

    public function ganti()
    {
        $id = $_POST['id'];
        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $deadline = htmlspecialchars($_POST['deadline']);
        $prioritas = htmlspecialchars($_POST['prioritas']);
        $status = $_POST['btnradio'];
        $date = date("Y-m-d");

        $query = "UPDATE todolist SET
                    judul = '$judul',
                    deskripsi = '$deskripsi',
                    deadline = '$deadline',
                    prioritas = '$prioritas',
                    status = '$status',
                    `waktu-diupdate` = '$date'
                    WHERE id = '$id'
                    ";

        $this->query($query);
    }

    public function hapus()
    {
        $id = $_POST["id"];
        $query = "DELETE FROM todolist WHERE id = $id";
        $this->query($query);
    }
}
