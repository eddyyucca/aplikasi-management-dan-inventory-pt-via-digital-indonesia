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
                    <a href="<?= base_url('atk/view_data_barang_habis_pakai') ?>" class="btn btn-danger">Barang Tidak Habis Pakai</a>
                    <a href="<?= base_url('atk/view_data') ?>" class="btn btn-primary">Barang Habis Pakai</a>
                    <a href="<?= base_url('atk/data_barang_rusak') ?>" class="btn btn-primary">Data Barang Rusak</a>
                    <a href="<?= base_url('atk/data_barang_update') ?>" class="btn btn-primary">Data Barang Masuk</a>
                    <?php if ($level_akun == "admin_gudang") { ?>
                        <a href="<?= base_url('atk/tambah_barang') ?>" class="btn btn-primary">Tambah Barang</a>
                    <?php   } else {
                    } ?>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Kondisi</th>
                            <th>Tanggal</th>
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
                                <td><?= $x->qty; ?></td>
                                <td><?= $x->satuan; ?></td>
                                <td><?= $x->kondisi; ?></td>
                                <td><?= $x->tanggal; ?></td>
                                <td>
                                    <?php if ($level_akun == "admin_hr") { ?>
                                        <p>-</p>
                                    <?php   } else { ?>
                                        <a href="<?= base_url('atk/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?= base_url('atk/barang_masuk/') . $x->id; ?>" class="btn btn-success">Update Stok</a>
                                        <a href="<?= base_url('atk/barang_rusak/') . $x->id; ?>" class="btn btn-warning">Barang Rusak</a>
                                        <a href="<?= base_url('atk/hapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
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