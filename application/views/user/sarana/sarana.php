<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mitra</th>
                            <th>Departemen</th>
                            <th>No Polisi</th>
                            <th>Status</th>
                            <th>No Lambung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        //hitung selisih tanggal
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= substr($x->mitra, 0, 10);
                                        echo "..."  ?></td>
                                <td><?= $x->dept  ?></td>
                                <td><?= $x->no_polisi; ?></td>
                                <td><?php
                                        //hitung selisih tanggal
                                        $sekarang = date('Y-m-d');
                                        $datesekarang = new DateTime($sekarang);
                                        $akhir = new DateTime($x->akhir_kontrak);
                                        $date = $datesekarang->diff($akhir);
                                        echo "$date->days hari";

                                        $date_color = $date->days;

                                        if ($date_color < 60) { ?>
                                        <button class="btn btn-danger"></button>
                                    <?php } elseif ($date_color > 30) { ?>
                                        <button class="btn btn-primary"></button>

                                    <?php } ?>
                                </td>
                                <td><?= $x->no_lambung; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('user/view_sarana/') . $x->id; ?>" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>