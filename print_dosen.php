<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #ddd;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Dosen</h1>
    <table>
        <thead>
            <tr>
                    <th>No.</th>
                    <th>Kode Dosen</th>
                    <th>Nids</th>
                    <th>Nipy</th>
                    <th>Nama Dosen</th>
                    <th>Kode Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data_dosen();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->namamk ?></td>
                            <td><?= $data->sks ?></td>
                            <td><?= $data->smt ?></td>
                            <td><?= $data->kodeprodi ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel dosen.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>