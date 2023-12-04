<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <script src="<?= BASEURL ?>/jquery.js"></script>
    <link rel="stylesheet" href="<?= BASEURL ?>/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./style-index.css">
</head>

<body>
    <a href="<?= BASEURL ?>/logout.php" onclick="return confirm('Yakin Ingin Logout?')"><svg width="2.7vw" height="2.7vw" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)" style="position:absolute;">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M17.2929 14.2929C16.9024 14.6834 16.9024 15.3166 17.2929 15.7071C17.6834 16.0976 18.3166 16.0976 18.7071 15.7071L21.6201 12.7941C21.6351 12.7791 21.6497 12.7637 21.6637 12.748C21.87 12.5648 22 12.2976 22 12C22 11.7024 21.87 11.4352 21.6637 11.252C21.6497 11.2363 21.6351 11.2209 21.6201 11.2059L18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289C16.9024 8.68342 16.9024 9.31658 17.2929 9.70711L18.5858 11H13C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13H18.5858L17.2929 14.2929Z" fill="#323232"></path>
                <path d="M5 2C3.34315 2 2 3.34315 2 5V19C2 20.6569 3.34315 22 5 22H14.5C15.8807 22 17 20.8807 17 19.5V16.7326C16.8519 16.647 16.7125 16.5409 16.5858 16.4142C15.9314 15.7598 15.8253 14.7649 16.2674 14H13C11.8954 14 11 13.1046 11 12C11 10.8954 11.8954 10 13 10H16.2674C15.8253 9.23514 15.9314 8.24015 16.5858 7.58579C16.7125 7.4591 16.8519 7.35296 17 7.26738V4.5C17 3.11929 15.8807 2 14.5 2H5Z" fill="#323232"></path>
            </g>
        </svg></a>
    <p class="judul">My To-Do-List</p>
    <main class="main-box">
        <section class="tambah-kotak">
            <div>
                <?php Flasher::flash(); ?>
            </div>
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul" maxlength="50" required>
                    <label for="judul">Judul</label>
                </div>
                <div class="form-floating">
                    <textarea name="deskripsi" class="form-control deskripsi" placeholder="deskripsi" id="deskripsi"></textarea>
                    <label for="deskripsi">Deksripsi</label>
                </div>
                <label for="deadline" class="deadline-label">Deadline </label><br>
                <input type="date" id="deadline" name="deadline">
                <label for="prioritas" class="prioritas-label">Prioritas </label>
                <select name="prioritas" id="prioritas" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="rendah">Rendah</option>
                    <option value="sedang">Sedang</option>
                    <option value="tinggi">Tinggi</option>
                </select>
                <button type="submit" name="tambah" class="btn btn-success tambah">Tambahkan!</button>
            </form>
        </section>
        <article class="todo-list-kotak">
            <p class="judul-list">My Task List</p>
            <section class="data">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check filter-btn" id="btn-check-1-outlined" checked autocomplete="off" data-status="Complete">
                    <label class="btn btn-outline-success" for="btn-check-1-outlined">Complete</label>
                    <input type="checkbox" class="btn-check filter-btn" id="btn-check-2-outlined" checked autocomplete="off" data-status="Not Completed">
                    <label class="btn btn-outline-danger" for="btn-check-2-outlined">Not Complete</label>
                </div>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check filter-btn" id="btn-check-rendah" checked autocomplete="off" data-prioritas="rendah">
                    <label class="btn btn-outline-info" for="btn-check-rendah">Rendah</label>
                    <input type="checkbox" class="btn-check filter-btn" id="btn-check-sedang" checked autocomplete="off" data-prioritas="sedang">
                    <label class="btn btn-outline-info" for="btn-check-sedang">Sedang</label>
                    <input type="checkbox" class="btn-check filter-btn" id="btn-check-tinggi" checked autocomplete="off" data-prioritas="tinggi">
                    <label class="btn btn-outline-info" for="btn-check-tinggi">Tinggi</label>
                </div>
                <?php
                $data = array_reverse($data);
                foreach ($data as $row) : ?>
                    <section class="data-row" data-status="<?= $row['status'] ?>" data-prioritas="<?= $row['prioritas'] ?>">
                        <section class="data-info">
                            <?php
                            if ($row['prioritas'] == 'rendah') {
                                echo '<div class="prioritas"><div class="prioritas-lingkaran-rendah"></div>Rendah</div>';
                            } else if ($row['prioritas'] == 'sedang') {
                                echo '<div class="prioritas"><div class="prioritas-lingkaran-sedang"></div>Sedang</div>';
                            } else if ($row['prioritas'] == 'tinggi') {
                                echo '<div class="prioritas"><div class="prioritas-lingkaran-tinggi"></div>Tinggi</div>';
                            }
                            ?>
                            <?php
                            if ($row['status'] == 'Complete') {
                                echo '<div class="status-green">Completed</div>';
                            } else {
                                echo '<div class="status-red">Not Completed</div>';
                            }
                            ?>
                            <p class="deadline">Deadline By <?= $row['deadline'] ?></p>
                        </section>
                        <section class="data-atas">
                            <span class="data-waktu">Dibuat Pada <?= $row['waktu-dibuat'] ?> | Terakhir Update Pada <?= $row['waktu-diupdate'] ?></span>
                            <h4 class="data-judul"><?= $row['judul'] ?></h4>
                        </section>
                        <section class="data-bawah">
                            <h5 class="data-isi"><?= $row['deskripsi'] ?></h5>
                            <button type="button" class="ganti ubah-tombol" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $row['id'] ?>">
                                Ganti Isi Todo-List
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Ganti Data Todo-List</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form -->
                                            <form action="" method="post">
                                                <input type="hidden" id="id-modal" name="id">
                                                <div class="mb-3">
                                                    <label for="judul" class="form-label">Judul :</label>
                                                    <input name="judul" type="text" class="form-control" id="judul-modal" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi :</label>
                                                    <textarea name="deskripsi" class="form-control" id="deskripsi-modal" aria-describedby="emailHelp"></textarea>
                                                </div>
                                                <label for="deadline">Deadline :</label>
                                                <input class="deadline-ubah" type="date" id="deadline-modal" name="deadline">
                                                <label for="prioritas">Prioritas :</label>
                                                <select name="prioritas" id="prioritas-modal" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    <option value="rendah">Rendah</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="tinggi">Tinggi</option>
                                                </select>
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                    <input value="Complete" type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                    <label class="btn btn-outline-success" for="btnradio1">Complete</label>
                                                    <input value="Not Completed" type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                    <label class="btn btn-outline-danger" for="btnradio2">Not Completed</label>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" name="ganti" class="btn btn-primary tombolModalUbah">Ganti!</button>
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <form class="form-hapus" action="" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="hapus" class="hapus" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus Todo-List</button>
                            </form>
                        </section>
                    </section>
                <?php endforeach ?>
            </section>
        </article>
    </main>
    <script src="<?= BASEURL ?>/script.js"></script>
    <script src="<?= BASEURL ?>/Bootstrap/js/bootstrap.js"></script>
</body>

</html>