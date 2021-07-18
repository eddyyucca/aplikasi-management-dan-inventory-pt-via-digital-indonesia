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
        <table border="3" class="c">
            <tr>
                <th>
                    <table border="0" width="300px">
                        <tr align="center">
                            <th rowspan="2"><img src="<?= base_url('assets/img/bree.png') ?>" width="50">
                            </th>
                            <th class="a">PT. BHUMI RANTAU ENERGI<br>
                                COAL MINE PROJECT
                            </th>
                            <th><img src="<?= base_url('assets/img/hrs.png') ?>" width="50"></th>
                        </tr>
                    </table>

                    <table border="1" width="300px" style="background-color: powderblue;">
                        <th>
                            <h4>MINE PERMIT</h4>
                        </th>
                    </table>

                    <table border="0" width="300px">
                        <th width="100px">
                            <img class="shadow" <?php
                                                if ($data->foto == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php
                                                                                                                            } else {
                                                                                                                                ?> src="<?= base_url('assets/foto_profil/' . $data->foto) ?>" <?php
                                                                                                                                                                                            } ?> "
                              alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 175px; width: 125px; display: block;">
                        </th>
                        <th align="center">
                            Jabatan
                            <br>
                            <?= $data->nama_jabatan ?>
                            <hr>
                            Departemen
                            <br>
                            <?= $data->nama_dep ?>
                        </th>
                    </table>
                    <br>
                    <table border="0" width="300px">
                        <th>
                            <ins><b><?= strtoupper($data->nama_lengkap) ?></b></ins><br>
                            <b><?= $data->id_karyawan ?></b>
                        </th>
                    </table>
                    <br>
                    <table border="1" width="300px" style="background-color: powderblue;">
                        <th><b>PT.HASNUR RIUNG SINERGI</b></th>
                    </table>
                </th>
            </tr>
        </table>
    </div>
</body>
<script>
    window.print()
</script>

</html>