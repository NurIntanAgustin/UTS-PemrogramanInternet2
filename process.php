<?php
include 'model.php';
//absen
if (isset($_POST['submit_simpan_absen'])) {
 $idabsen = $_POST['idabsen'];
 $tglabsen = $_POST['tglabsen'];
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
 header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
 $idabsen = $_POST['idabsen'];
 $tglabsen = $_POST['tglabsen'];
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->update_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
 header('location:absen.php');
}
if (isset($_GET['absen_id'])) {
 $idabsen = $_GET['absen_id'];
 $model = new Model();
 $model->delete_absen($idabsen);
 header('location:absen.php');
}
//dosen
if (isset($_POST['submit_simpan_dosen'])) {
 $kodedosen = $_POST['kodedosen'];
 $nids = $_POST['nids'];
 $nipy = $_POST['nipy'];
 $namadosen = $_POST['namadosen'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert_dosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi);
 header('location:dosen.php');
}
if (isset($_POST['submit_edit_dosen'])) {
 $kodedosen = $_POST['kodedosen'];
 $nids = $_POST['nids'];
 $nipy = $_POST['nipy'];
 $namadosen = $_POST['namadosen'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->update_dosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi);
 header('location:dosen.php');
}
if (isset($_GET['id'])) {
 $kodedosen = $_GET['id'];
 $model = new Model();
 $model->delete_dosen($kodedosen);
 header('location:dosen.php');
}
//jadwal
if (isset($_POST['submit_simpan_jadwal'])) {
 $id = $_POST['id'];
 $jadwalid = $_POST['jadwalid'];
 $kodedosen = $_POST['kodedosen'];
 $hari = $_POST['hari'];
 $thnakademik = $_POST['thnakademik'];
 $semester = $_POST['semester'];
 $kodemk = $_POST['kodemk'];
 $sesi = $_POST['sesi'];
 $jammasuk = $_POST['jammasuk'];
 $jamkeluar = $_POST['jamkeluar'];
 $kelas = $_POST['kelas'];
 $ruang = $_POST['ruang'];
 $status = $_POST['status'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:jadwal.php');
}
if (isset($_POST['submit_edit_jadwal'])) {
 $id = $_POST['id'];
 $jadwalid = $_POST['jadwalid'];
 $kodedosen = $_POST['kodedosen'];
 $hari = $_POST['hari'];
 $thnakademik = $_POST['thnakademik'];
 $semester = $_POST['semester'];
 $kodemk = $_POST['kodemk'];
 $sesi = $_POST['sesi'];
 $jammasuk = $_POST['jammasuk'];
 $jamkeluar = $_POST['jamkeluar'];
 $kelas = $_POST['kelas'];
 $ruang = $_POST['ruang'];
 $status = $_POST['status'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:jadwal.php');
}
if (isset($_GET['jadwal_id'])) {
 $id = $_GET['jadwal_id'];
 $model = new Model();
 $model->delete_jadwal($id);
 header('location:jadwal.php');
}
//matakuliah
if (isset($_POST['submit_simpan_mk'])) {
 $kodemk = $_POST['kodemk'];
 $namamk = $_POST['namamk'];
 $sks = $_POST['sks'];
 $smt = $_POST['smt'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert_mk($kodemk, $namamk, $sks, $smt, $kodeprodi);
 header('location:matakuliah.php');
}
if (isset($_POST['submit_edit_mk'])) {
 $kodemk = $_POST['kodemk'];
 $namamk = $_POST['namamk'];
 $sks = $_POST['sks'];
 $smt = $_POST['smt'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->update_mk($kodemk, $namamk, $sks, $smt, $kodeprodi);
 header('location:matakuliah.php');
}
if (isset($_GET['mk_id'])) {
 $kodemk = $_GET['mk_id'];
 $model = new Model();
 $model->delete_mk($kodemk);
 header('location:matakuliah.php');
}
//prodi
if (isset($_POST['submit_simpan_prodi'])) {
 $kodeprodi = $_POST['kodeprodi'];
 $namaprodi = $_POST['namaprodi'];
 $model = new Model();
 $model->insert_prodi($kodeprodi, $namaprodi);
 header('location:prodi.php');
}
if (isset($_POST['submit_edit_prodi'])) {
 $kodeprodi = $_POST['kodeprodi'];
 $namaprodi = $_POST['namaprodi'];
 $model = new Model();
 $model->update_prodi($kodeprodi, $namaprodi);
 header('location:prodi.php');
}
if (isset($_GET['id'])) {
 $kodeprodi = $_GET['id'];
 $model = new Model();
 $model->delete_prodi($kodeprodi);
 header('location:prodi.php');
}