<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('mess') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('mess/prosestambah') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Nama Mess/Lahan</td>
                            <td><input type="text" name="mess_lahan" class="form-control" placeholder="Nama Mess/Lahan"></td>
                        </tr>
                        <tr>
                            <td>Nama Pemilik Rumah</td>
                            <td><input type="text" name="nama_perum" class="form-control" placeholder="Nama Pemilik Rumah"></td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td><input type="text" name="no_telp" class="form-control" placeholder="No Telpon"></td>
                        </tr>
                        <tr>
                            <td>No Speedy</td>
                            <td><input type="text" name="no_speedy" class="form-control" placeholder="No Speedy"></td>
                        </tr>
                        <tr>
                            <td>No FAX</td>
                            <td><input type="text" name="no_fax" class="form-control" placeholder="No FAX"></td>
                        </tr>
                        <tr>
                            <td>No OK Vision</td>
                            <td><input type="text" name="no_okvision" class="form-control" placeholder="No OK Vision"></td>
                        </tr>
                        <tr>
                            <td>No Listrik</td>
                            <td><input type="text" name="no_listrik" class="form-control" placeholder="No Listrik"></td>
                        </tr>
                        <tr>
                            <td>No PDAM</td>
                            <td><input type="text" name="no_pdam" class="form-control" placeholder="No PDAM"></td>
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
                            <td>Harga Sewa</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Harga Sewa" aria-label="Username" name="harga_sewa" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Kamar</td>
                            <td><input type="number" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar"></td>
                        </tr>
                        <tr>
                            <td>Kapasitas</td>
                            <td><input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas"></td>
                        </tr>
                        <tr>
                            <td>Perjanjian</td>
                            <td><input type="text" name="perjanjian" class="form-control" placeholder="Perjanjian"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" class="form-control" placeholder="Perjanjian"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="ket" class="form-control" placeholder="Keterangan"></td>
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