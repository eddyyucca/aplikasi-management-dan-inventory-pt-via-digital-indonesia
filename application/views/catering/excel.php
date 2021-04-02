<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Catering $date.xls");
?>

<table border="1">

    <tr align="center" width="400">
        <td colspan="7">DEPARTEMEN HRGS</td>
    </tr>

    <tr align="center">
        <td colspan="7">
            <h2>DATA CATERING</h2>
        </td>
    </tr>

    <tr>
        <td>No.</td>
        <td>Nama Mitra</td>
        <td>Alamat</td>
        <td>Awal Kontrak</td>
        <td>Akhir Kontrak</td>
        <td>Selisih Hari</td>
        <td>Keterangan</td>
    </tr>

    <?php $no = 1; ?>
    <tr>
        <?php foreach ($data as $x) { ?>


            <td align="center"><?= $no++; ?></td>
            <td><?= $x->mitra; ?></td>
            <td align="center"><?= $x->alamat; ?></td>
            <td><?= $x->kontrak_awal; ?></td>
            <td><?= $x->akhir_kontrak; ?></td>
            <td> <?php   //hitung selisih tanggal
                        $sekarang = date('Y-m-d');
                        $datesekarang = new DateTime($sekarang);
                        $akhir = new DateTime($x->akhir_kontrak);
                        $date = $datesekarang->diff($akhir);
                        echo "$date->days "; ?>

            </td>
            <td><?= $x->ket; ?></td>
    </tr>
<?php } ?>
</table>