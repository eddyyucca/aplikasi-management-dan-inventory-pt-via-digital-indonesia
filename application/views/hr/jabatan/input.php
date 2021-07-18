<div class="container-fluid">
    <div class="card-body">
        <div class="card shadow mb-4">
            <!-- header -->
            <div class="card-header py-3">
                <a href="<?= base_url('hr/departemen') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <!-- mulai -->
            <div class="card-body">
                <div class="row">
                    <div class="container col-7">
                        <?= validation_errors() ?>
                        <form action="<?= base_url('hr/jab_prosesInput') ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Nama Jabatan</label>
                                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Jabatan Baru">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                        <!-- akhir -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>