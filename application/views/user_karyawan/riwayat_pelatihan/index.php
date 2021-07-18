<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Riwayat Pelatihan
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_riwayat_pelatihan') ?>">Tambah Riwayat Pelatihan</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bidang</th>
                            <th>Penyelenggara</th>
                            <th>Periode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($riwayat_pelatihan as $p) { ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $p->bidang ?></td>
                                <td><?= $p->penyelenggara ?></td>
                                <td><?= $p->periode ?></td>
                                <td align="center">
                                    <a href="<?= base_url('user_karyawan/edit_riwayat_pelatihan/') . $p->id_pelatihan ?>" class="btn btn-success"><i class="fas fa-edit"></i></i></a>
                                    <a href="<?= base_url('user_karyawan/hapus_riwayat_pelatihan/') . $p->id_pelatihan ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i></i></a>

                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>