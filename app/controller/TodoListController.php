<?php

class TodoListController extends Controller
{
    public function __construct()
    {
        $data = [];

        App::checkSession(false, "login");
        $this->cekAksi();

        $data = $this->model("TodoListModel")->ambilData();

        $this->view('index', $data);
    }

    public function cekAksi()
    {
        if (isset($_POST['tambah'])) {
            $this->model('TodoListModel')->tambah();
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        }
        if (isset($_POST['ganti'])) {
            $this->model('TodoListModel')->ganti();
            Flasher::setFlash('berhasil', 'digantikan', 'success');
        }
        if (isset($_POST['hapus'])) {
            $this->model('TodoListModel')->hapus();
            Flasher::setFlash('berhasil', 'dihapuskan', 'success');
        }
    }
}
