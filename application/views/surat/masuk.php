<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <a href="<?= base_url('hr/surat') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <?= validation_errors() ?>
                        <form action="<?= base_url('hr/prosessurat_masuk') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputItem">No Surat</label>
                                <input type="text" class="form-control" id="no_surat" name="no_surat_masuk" placeholder="No SUrat Masuk">
                            </div>
                            <div class="form-group">
                                <label for="inputItem">Perihal</label>
                                <input type="text" class="form-control" id="nama_user" name="perihal" placeholder="Perihal">
                            </div>
                            <div class="form-group">
                                <label for="inputItem">File</label>
                                <input type="file" name="file" class="form-control" placeholder="file" required></td>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                        <hr>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- memanggil data user -->
                                <?php
                                $no = 1;
                                foreach ($surat as $x) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $x->no_surat_masuk; ?></td>
                                            <td><?= $x->perihal; ?></td>
                                            <td align="center">
                                                <a href="<?= base_url('hr/hapus_surat_masuk/') . $x->id_surat_masuk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>

                                                <a href="<?= base_url('assets/file_surat/' . $x->file) ?>" target="_blank" class="btn btn-primary">Cek Berkas</a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- akhir -->
                </div>
            </div>
        </div>
    </div>
</div>