<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Mess Dan Lahan $date.xls");
?>

<table border="1">

    <tr>
        <td colspan="18" align="center">
            <h1>
                DATA MESS DAN LAHAN <?= $date ?>
            </h1>
        </td>
    </tr>

    <tr>
        <td colspan="18"><br>
        </td>
    </tr>
    <tr>
        <td>No</td>
        <td>Nama Mess/Lahan</td>
        <td>Nama Perum</td>
        <td>Alamat</td>
        <td>No Telpon</td>
        <td>No Speedy</td>
        <td>No FAX</td>
        <td>No OK Vesion</td>
        <td>No Listrik</td>
        <td>No PDAM</td>
        <td>Awal Kontrak</td>
        <td>Akhir Kontrak</td>
        <td>Harga Sewa</td>
        <td>Selisih Hari</td>
        <td>Kapasitas</td>
        <td>Jumlah Kamar</td>
        <td>Perjanjian</td>
        <td>Keterangan</td>
    </tr>

    <tr>
        <?php
        $no = 1;
        foreach ($data as $x) { ?>
            <td><?= $no++; ?></td>
            <td><?= $x->mess_lahan; ?></td>
            <td><?= $x->nama_perum; ?></td>
            <td><?= $x->alamat; ?></td>
            <td><?= $x->no_telp; ?></td>
            <td><?= $x->no_speedy; ?></td>
            <td><?= $x->no_fax; ?></td>
            <td><?= $x->no_okvision; ?></td>
            <td><?= $x->no_listrik; ?></td>
            <td><?= $x->no_pdam; ?></td>
            <td><?= $x->awal_kontrak; ?></td>
            <td><?= $x->akhir_kontrak; ?></td>
            <td><?= $x->harga_sewa; ?></td>
            <td><?php   //hitung selisih tanggal
                    $sekarang = date('Y-m-d');
                    $datesekarang = new DateTime($sekarang);
                    $akhir = new DateTime($x->akhir_kontrak);
                    $date = $datesekarang->diff($akhir);
                    echo "$date->days Hari";

                    ?>
            </td>
            <td><?= $x->kapasitas; ?></td>
            <td><?= $x->jumlah_kamar; ?></td>
            <td><?= $x->perjanjian; ?></td>
            <td><?= $x->ket; ?></td>
    </tr>
<?php } ?>
</table>