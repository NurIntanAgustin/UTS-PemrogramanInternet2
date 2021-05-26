<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Sistem Absensi Mahasiswa</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" href="absen.php">Absen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="jadwal.php">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="matakuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="prodi.php">Program Studi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Absen Mahasiswa</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <h1>Data Absen Mahasiswa</h1>
        <a href="create_absen.php">Tambah Data</a>
        <br>
        <a href="print_absen.php" target="_blank">Cetak Data</a>
        <br>
        <table border="1">
            <thead>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Tanggal Absen</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Kode Dosen</th>
                    <th>Sesi</th>
                    <th>Kelas Sesi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data_absen();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->idabsen ?></td>
                            <td><?= $data->tglabsen ?></td> 
                            <td><?= $data->masuk ?></td>
                            <td><?= $data->keluar ?></td>
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->kelassesi ?></td>
                            <td>
                                <a name="edit" id="edit" href="edit_absen.php?id=<?= $data->idabsen ?>">Edit</a>
                                <a name="hapus" id="hapus" href="process.php?absen_id=<?= $data->idabsen ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel absen mahasiswa.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>