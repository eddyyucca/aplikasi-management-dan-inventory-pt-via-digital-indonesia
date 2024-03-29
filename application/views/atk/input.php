<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('atk/prosesInput')  ?>" method="POST">
                        <div class="form-group">
                            <label for="inputItem">Item</label>
                            <input type="text" class="form-control" id="item" name="item" placeholder="Nama Item Barang">
                        </div>

                        <div class="form-group">
                            <label for="Quantity">Quantity</label>
                            <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="Description">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan">
                        </div>
                        <div class="form-group mr-1">
                            <label for="Quantity">Quantity</label>
                            <select name="type" class="custom-select">
                                <option value="">--PILIH TYPE--</option>
                                <option value="1">Barang Habis Pakai</option>
                                <option value="2">Barang tidak Habis Pakai</option>
                            </select>
                        </div>
                        <div class="form-group mr-1">
                            <label for="Quantity">Kondisi Barang</label>
                            <select name="kondisi" class="custom-select">
                                <option value="">--PILIH KONDISI--</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>