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
    <div class="container">
        <table border="3" class="c" align="center">
            <tr>
                <th>
                    <table border="0">
                        <tr align="center">
                            <th><img src="<?= base_url('assets/img/cop.png') ?> " width="800px"></th>
                        </tr>
                        <td align="right">Tanggal <?= date('d M Y')  ?> &nbsp;</td>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><u>PERSOLAN DATA KARYAWAN</u></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td align="center"><img src="<?= base_url('assets/foto_profil/' . $data->foto) ?> " width="120px" height="150px"></td>
                        </tr>
                    </table>
                    <br>
                    <u align="center">DATA PERIBADI</u>
                    <br> <br>
                    <table border="0" width="800px">



                        <tr align="left">
                            <td width="30px"></td>
                            <td> NRP</td>
                            <td>: <?= $data->id_karyawan ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Nama</td>
                            <td>: <?= $data->nama_lengkap ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Departemen</td>
                            <td>: <?= $data->nama_dep ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Jabatan </td>
                            <td>: <?= $data->nama_jabatan ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Tempat,Tanggal Lahir </td>
                            <td>: <?= $data->tempat ?> <?= $data->ttl ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Alamat </td>
                            <td>: <?= $data->alamat_saat_ini ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> Email </td>
                            <td>: <?= $data->email ?> </td>
                        </tr>
                        <tr align="left">
                            <td></td>
                            <td> No Telpon </td>
                            <td>: <?= $data->no_telp ?> </td>
                        </tr>
                    </table>
                    <br>
                    <u align="center">RIWAYAT PENDIDIKAN KARYAWAN </u>
                    <br> <br>
                    <table border="1" width="700px" align="center">
                        <tr>
                            <th>No</th>
                            <th>Nama Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Tahun</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($pendidikan as $pen) { ?>
                            <tr align="left">
                                <td align="center"><?= $no++  ?></td>
                                <td><?= $pen->nama_sekolah ?></td>
                                <td align="center"><?= $pen->nama_jurusan ?></td>
                                <td align="center"><?= $pen->tahun_pendidikan ?></td>
                            </tr>
                        <?php  } ?>
                    </table>

                    <br>
                    <u align="center">RIWAYAT PELATIHAN </u>
                    <br> <br>
                    <table border="1" width="700px" align="center">
                        <tr>
                            <th>No</th>
                            <th>Instansi</th>
                            <th>Bidang</th>
                            <th>Tahun</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($pendidikan as $pen) { ?>
                            <tr align="left">
                                <td align="center"><?= $no++  ?></td>
                                <td><?= $pen->nama_sekolah ?></td>
                                <td align="center"><?= $pen->nama_jurusan ?></td>
                                <td align="center"><?= $pen->tahun_pendidikan ?></td>
                            </tr>
                        <?php  } ?>
                    </table>
                    <br><br><br>
    </div>
</body>
<!-- <script>
    window.print()
</script> -->

</html>