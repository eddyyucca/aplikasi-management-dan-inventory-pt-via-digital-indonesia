<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Input Seragam
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <?= validation_errors() ?>
                        <form action="<?= base_url('seragam/prosesinput') ?>" method="POST">
                            <div class="form-group">
                                <label for="type">Seragam/Celana</label>
                                <select name="type" id="type" class="custom-select">
                                    <option value="">--PILIH PAKAIAN--</option>
                                    <option value="seragam_kerja">Seragam Kerja</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="celana">Celana</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputItem">Ukuran</label>
                                <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="ukuran">
                            </div>

                            <div class="form-group">
                                <label for="inputItem">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok">
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                    <!-- akhir -->
                </div>
            </div>
        </div>
    </div>
</div>