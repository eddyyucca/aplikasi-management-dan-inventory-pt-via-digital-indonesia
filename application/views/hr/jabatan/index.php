<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold ">Jabatan</h6>
            </div>
            <!-- mulai -->
            <div class="card-body">
                <div class="table-responsive">
                    <a href="<?= base_url('hr/jab_tambahJabatan') ?>" class="btn btn-danger">Tambah Jabatan</a>
                    <hr>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($data as $x) { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->nama_jabatan; ?></td>
                                    <td align="center">
                                        <a href="<?= base_url('hr/jab_edit/') . $x->id_jab; ?>" class="btn btn-primary">Edit</a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end tabel -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->