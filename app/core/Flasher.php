<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            // echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show w-100" role="alert">
            // To-do List telah '. $_SESSION['flash']['pesan'] .' <strong>' . $_SESSION['flash']['aksi'] .'</strong>
            // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            // </div>';
            echo '
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show w-100" role="alert">
                        To-do List telah ' . $_SESSION['flash']['pesan'] . ' <strong>' . $_SESSION['flash']['aksi'] . '</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}
