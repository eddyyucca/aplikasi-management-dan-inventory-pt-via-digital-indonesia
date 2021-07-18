<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Data Anak
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_data_anak') ?>">Tambah Data Anak</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($anak as $a) { ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $a->nama_lengkap_anak ?></td>
                                <td><?= $a->no_telp_anak ?></td>
                                <td align="center">
                                    <a href="<?= base_url('user_karyawan/edit_data_anak/') . $a->id_anak ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('user_karyawan/hapus_anak/') . $a->id_anak ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i></a>

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