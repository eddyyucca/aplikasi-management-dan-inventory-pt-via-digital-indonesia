<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data ATK</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <!-- Button trigger modal -->
                    <a href="<?= base_url('atk/view_data_barang_habis_pakai') ?>" class="btn btn-primary">Barang Tidak Habis Pakai</a>
                    <a href="<?= base_url('atk/view_data') ?>" class="btn btn-primary">Barang Habis Pakai</a>
                    <a href="<?= base_url('atk/data_barang_rusak') ?>" class="btn btn-primary">Data Barang Rusak</a>
                    <a href="<?= base_url('atk/data_barang_update') ?>" class="btn btn-danger">Data Barang Masuk</a>
                    <?php if ($level_akun == "admin_gudang") { ?>
                        <a href="<?= base_url('atk/tambah_barang') ?>" class="btn btn-primary">Tambah Barang</a>
                    <?php   } else {
                    } ?>

                    <!-- Button trigger modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                        Print Excel
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Klik Tombol Print,Data akan terunduh dan tersimpan di folder download
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= base_url('atk/excel') ?>" class="btn btn-success">Print Excel</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <?php if ($level_akun == "admin_gudang") { ?>
                    <a href="<?= base_url('atk/cetak_data_barang_update') ?>" class="btn btn-primary">CETAK</a>

                <?php } else {
                } ?>
                <hr>
                <?php if ($level_akun == "admin_hr") { ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Jumlah</th>
                                <th>tanggal</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($data as $x) { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->item; ?></td>
                                    <td><?= $x->jumlah; ?></td>
                                    <td><?= $x->tanggal_barang_masuk; ?></td>

                                </tr>
                            <?php }
                        } else { ?>
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Jumlah</th>
                                <th>tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($data as $x) { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->item; ?></td>
                                    <td><?= $x->jumlah; ?></td>
                                    <td><?= $x->tanggal_barang_masuk; ?></td>
                                    <td>

                                        <a href="<?= base_url('atk/hapus_masuk/') . $x->id_barang_masuk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <?php } ?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>