<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Dosen</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="dosen.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Nids</label>
        <br>
        <input type="text" name="nids">
        <br>
        <label>Nipy</label>
        <br>
        <input type="text" name="nipy">
        <br>
        <label>Nama Dosen</label>
        <br>
        <input type="text" name="namadosen">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br><br>
        <button type="submit" name="submit_simpan_dosen">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>