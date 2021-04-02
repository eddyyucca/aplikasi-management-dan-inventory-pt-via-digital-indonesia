<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('catering/prosestambah') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td>Nama Mitra</td>
                                <td><input type="text" name="nama_mitra" class="form-control" placeholder="Nama Mitra"></td>
                            </tr>
                            <tr>
                                <td>Awal Kontrak</td>
                                <td><input type="date" name="awal_kontrak" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Akhir Kontrak</td>
                                <td><input type="date" name="akhir_kontrak" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" class="form-control" placeholder="Alamat"></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><input type="text" name="ket" class="form-control" placeholder="Keterangan"></td>
                            </tr>

                        </table>
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>