<?php
$kodeprodi = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_prodi($kodeprodi);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mata Kuliah</title>
</head>

<body>
    <h1>Edit Data Mata Kuliah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Kode Program Studi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
        <br>
        <label>Nama Program Studi</label>
        <br>
        <input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
        <br><br>
        <button type="submit" name="submit_edit_prodi">Submit</button>
    </form>
</body>

</html>