<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Riwayat Pekerjaan
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_riwayat_pekerjaan') ?>">Tambah Riwayat Pekerjaan</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahan</th>
                            <th>Bidang</th>
                            <th>jabatan</th>
                            <th>Periode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($riwayat_pekerjaan as $pekerjaan) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pekerjaan->nama_perusahaan ?></td>
                                <td><?= $pekerjaan->bidang_usaha ?></td>
                                <td><?= $pekerjaan->jab_terakhir ?></td>
                                <td><?= $pekerjaan->periode ?></td>
                                <td>
                                    <a href="<?= base_url('user_karyawan/edit_riwayat_pekerjaan/') . $pekerjaan->id_rw_pekerjaan ?>" class="btn btn-success"><i class="fas fa-edit"></i></i></a>
                                    <a href="<?= base_url('user_karyawan/hapus_riwayat_pekerjaan/') . $pekerjaan->id_rw_pekerjaan ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i></i></a>

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