<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_jadwal($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Jadwal</title>
</head>

<body>
    <h1>Edit Data Jadwal</h1>
    <a href="jadwal.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
         <label>Id</label>
        <br>
        <input type="text" name="id" value="<?php echo $data->id ?>">
        <br>
        <label>Jadwal Id</label>
        <br>
        <input type="text" name="jadwalid" value="<?php echo $data->jadwalid ?>">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
        <br>
        <label>Hari</label>
        <br>
        <input type="text" name="hari" value="<?php echo $data->hari ?>">
        <br>
        <label>Tahun Akadedmik</label>
        <br>
        <input type="text" name="thnakademik" value="<?php echo $data->thnakademik ?>">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="semester" value="<?php echo $data->semester ?>">
        <br>
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk" value="<?php echo $data->kodemk ?>">
        <br>
        <label>Sesi</label>
        <br>
        <input type="text" name="sesi" value="<?php echo $data->sesi ?>">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="time" name="jammasuk" value="<?php echo $data->jammasuk ?>">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="time" name="jamkeluar" value="<?php echo $data->jamkeluar ?>">
        <br>
        <label>Kelas</label>
        <br>
        <input type="text" name="kelas" value="<?php echo $data->kelas ?>">
        <br>
        <label>Ruang</label>
        <br>
        <input type="text" name="ruang" value="<?php echo $data->ruang ?>">
        <br>
        <label>Status</label>
        <br>
        <input type="text" name="status" value="<?php echo $data->status ?>">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>"">
        <br>
        <br><br>
        <button type="submit" name="submit_edit_jadwal">Submit</button>
    </form>
</body>

</html>