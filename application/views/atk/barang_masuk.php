<!-- Begin Page Content -->
<div class="container col-8">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('atk') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <?php
                    if ($data == false) {
                        echo "<h1>Data Kosong</h1>";
                    } else { ?>


                        <form action="<?= base_url('atk/tambah_stok/') . $data->id;  ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Item</label>
                                <input type="text" class="form-control" id="item" disabled placeholder="Nama Item Barang" value="<?= $data->item; ?>">
                                <input type="hidden" class="form-control" id="item" name="id_barang" value="<?= $data->id; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="inputItem">Item</label>
                                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Barang masuk" name="jumlah">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>