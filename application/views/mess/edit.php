<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('mess') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('mess/prosesedit/') . $data->id; ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Nama Mess/Lahan</td>
                            <td><input type="text" name="mess_lahan" class="form-control" value="<?= $data->mess_lahan ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama Pemilik Rumah</td>
                            <td><input type="text" name="nama_perum" class="form-control" value="<?= $data->nama_perum ?>"></td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td><input type="text" name="no_telp" class="form-control" value="<?= $data->no_telp ?>"></td>
                        </tr>
                        <tr>
                            <td>No Speedy</td>
                            <td><input type="text" name="no_speedy" class="form-control" value="<?= $data->no_speedy ?>"></td>
                        </tr>
                        <tr>
                            <td>No FAX</td>
                            <td><input type="text" name="no_fax" class="form-control" value="<?= $data->no_fax ?>"></td>
                        </tr>
                        <tr>
                            <td>No OK Vision</td>
                            <td><input type="text" name="no_okvision" class="form-control" value="<?= $data->no_okvision ?>"></td>
                        </tr>
                        <tr>
                            <td>No Listrik</td>
                            <td><input type="text" name="no_listrik" class="form-control" value="<?= $data->no_listrik ?>"></td>
                        </tr>
                        <tr>
                            <td>No PDAM</td>
                            <td><input type="text" name="no_pdam" class="form-control" value="<?= $data->no_pdam ?>"></td>
                        </tr>
                        <tr>
                            <td>Awal Kontrak</td>
                            <td><input type="date" name="awal_kontrak" class="form-control" value="<?= $data->awal_kontrak ?>"></td>
                        </tr>
                        <tr>
                            <td>Akhir Kontrak</td>
                            <td><input type="date" name="akhir_kontrak" class="form-control" value="<?= $data->akhir_kontrak ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga Sewa</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Username" name="harga_sewa" aria-describedby="basic-addon1" value="<?= substr($data->harga_sewa, 2)  ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Kamar</td>
                            <td><input type="number" name="jumlah_kamar" class="form-control" value="<?= $data->jumlah_kamar ?>"></td>
                        </tr>
                        <tr>
                            <td>Kapasitas</td>
                            <td><input type="number" name="kapasitas" class="form-control" value="<?= $data->kapasitas ?>"></td>
                        </tr>
                        <tr>
                            <td>Perjanjian</td>
                            <td><input type="text" name="perjanjian" class="form-control" value="<?= $data->perjanjian ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" class="form-control" value="<?= $data->alamat ?>"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="ket" class="form-control" value="<?= $data->ket ?>"></td>
                        </tr>

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