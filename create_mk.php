<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Mata Kuliah</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Mata Kuliah</label>
        <br>
        <input type="text" name="namamk">
        <br>
        <label>SKS</label>
        <br>
        <input type="text" name="sks">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="smt">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br>
        <br><br>
        <button type="submit" name="submit_simpan_mk">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>