<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Data pasangan
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_data_pasangan') ?>">Tambah Data pasangan</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No KTP</th>
                            <th>No Telpon</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pasangan as $s) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s->nama_lengkap_pasangan ?></td>
                                <td><?= $s->no_ktp_pasangan ?></td>
                                <td><?= $s->telpon_pasangan ?></td>
                                <td align="center">
                                    <a href="<?= base_url('user_karyawan/edit_data_pasangan/') . $s->id_pasangan ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('user_karyawan/hapus_pasangan/') . $s->id_pasangan ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i></a>

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