<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Karyawan PT Via Digital Indonesia.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        th .a {
            height: 50px;
            padding-left: 10px;
            vertical-align: top;

        }

        table {
            border-collapse: collapse;
        }

        tr .bungkus {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <table border="1" width="1000px" align="center">
        <thead>
            <tr>
                <th>NO</th>
                <th>NRP</th>
                <th>NAMA</th>
                <th>DEPARTEMEN</th>
                <th>JABATAN</th>
                <th>EMAIL</th>
                <th>NO TELPON</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $no = 1;
                foreach ($data_karyawan as $x) { ?>
                    <td><?= $no++ ?></td>
                    <td><?= $x->id_karyawan ?></td>
                    <td><?= $x->nama_lengkap ?></td>
                    <td><?= $x->nama_dep ?></td>
                    <td><?= $x->nama_jabatan ?></td>
                    <td><?= $x->email ?></td>
                    <td><?= $x->no_telp ?></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>