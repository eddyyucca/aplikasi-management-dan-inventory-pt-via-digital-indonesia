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
                </div>
                <form action="<?= base_url('atk/atk_dep') ?>" method="post">
                    <div class="input-group mb-3 col-6">
                        <div class="form-group mr-1">
                            <select name="laporan_dep" class="custom-select">
                                <option value="">--PILIH DEPARTEMEN--</option>
                                <?php foreach ($data_departemen as $x) : ?>
                                    <option value="<?= $x->id; ?>"><?= $x->nama_dep; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group ml-2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Jumlah</th>

                            <th>Tanggal Order Terakhir</th>

                            <th>Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->item; ?></td>
                                <td><?= $x->qty_order; ?></td>
                                <td><?= $x->tanggal; ?></td>
                                <td><?= $x->satuan; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>