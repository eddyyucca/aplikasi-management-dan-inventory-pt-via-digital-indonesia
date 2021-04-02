<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Celana $date.xls");
?>

<table border="1">

    <tr>
        <td colspan="3" align="center">
            <h1>
                DATA CELANA
            </h1>
        </td>
    </tr>

    <tr>
        <td colspan="18"><br>
        </td>
    </tr>
    <tr>
        <th>No</th>
        <th>Ukuran</th>
        <th>Stok</th>
    </tr>

    <tr>
        <?php
        $no = 1;
        foreach ($data as $x) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $x->ukuran ?></td>
        <td><?= $x->stok ?></td>

    </tr>
    </tr>
<?php } ?>
</table>