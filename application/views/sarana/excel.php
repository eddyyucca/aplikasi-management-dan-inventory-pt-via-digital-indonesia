<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Sarana $date.xls");
?>

<div class="table-responsive">
    <table class="table" border="1">

        <tr>
            <th colspan="20">
                <h1>
                    DATA SARANA <?= date('Y-m-d'); ?>
                </h1>
            </th>
        </tr>
        <tr>
            <th>No</th>
            <th>Mitra HRS</th>
            <th>Jenis</th>
            <th>No. Polisi Baru</th>
            <th>Warna TNKB</th>
            <th>Kondisi</th>
            <th>No Lambung</th>
            <th>No. PR</th>
            <th>No. PO</th>
            <th>Awal Kontrak</th>
            <th>Akhir Kontrak</th>
            <th>Selisih Hari</th>
            <th>Dept</th>
            <th>Harga Sewa Unit</th>
            <th>Jasa Driver</th>
            <th>Shift Driver</th>
            <th>Masa Kontrak</th>
            <th>STNK Tahunan</th>
            <th>STNK Lima Tahun</th>
            <th>Keterangan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($data as $x) : ?>
            <tr>
                <td><?= $no++; ?> </td>
                <td><?= $x->mitra; ?></td>
                <td><?= $x->type; ?></td>
                <td><?= $x->no_polisi; ?></td>
                <td><?= $x->warna_tnkb; ?></td>
                <td><?= $x->kondisi; ?></td>
                <td><?= $x->no_lambung; ?></td>
                <td><?= $x->no_pr; ?></td>
                <td><?= $x->no_po; ?></td>
                <td><?= $x->awal_kontrak; ?></td>
                <td><?= $x->akhir_kontrak; ?></td>
                <td><?php $sekarang = date('Y-m-d');
                        $datesekarang = new DateTime($sekarang);
                        $akhir = new DateTime($x->akhir_kontrak);
                        $date = $datesekarang->diff($akhir);
                        echo "$date->days hari";  ?></td>

                <td><?= $x->dept; ?></td>
                <td><?= $x->harga_sewa_unit; ?></td>
                <td><?= $x->jasa_driver; ?></td>
                <td><?= $x->shift; ?></td>
                <td><?= $x->masa_kontrak; ?></td>
                <td><?= $x->stnk_tahunan; ?></td>
                <td><?= $x->stnk_lima_tahun; ?></td>
                <td><?= $x->ket; ?></td>

            </tr>
        <?php endforeach ?>
    </table>
</div>