<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('sarana') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('sarana/prosestambah') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Mitra</td>
                            <td><input type="text" name="mitra" class="form-control" placeholder="Mitra"></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td><input type="text" name="type" class="form-control" placeholder="type"></td>
                        </tr>

                        <tr>
                            <td>Jenis</td>
                            <td><input type="text" name="jenis" class="form-control" placeholder="Jenis"></td>
                        </tr>

                        <tr>
                            <td>No DA</td>
                            <td><input type="text" name="no_polisi" class="form-control" placeholder="No DA"></td>
                        </tr>

                        <tr>
                            <td>Warna TNKB</td>
                            <td><input type="text" name="warna_tnkb" class="form-control" placeholder="Warna TNKB"></td>
                        </tr>

                        <tr>
                            <td>No Lambung</td>
                            <td><input type="text" name="no_lambung" class="form-control" placeholder="No Lambung"></td>
                        </tr>

                        <tr>
                            <td>Kondisi</td>
                            <td><input type="text" name="kondisi" class="form-control" placeholder="No Lambung"></td>
                        </tr>

                        <tr>
                            <td>No PR</td>
                            <td><input type="text" name="no_pr" class="form-control" placeholder="No PR"></td>
                        </tr>

                        <tr>
                            <td>No PO</td>
                            <td><input type="text" name="no_po" class="form-control" placeholder="No PO"></td>
                        </tr>

                        <tr>
                            <td>Awal Kontrak</td>
                            <td><input type="date" name="awal_kontrak" class="form-control" placeholder="Awal Kontrak"></td>
                        </tr>

                        <tr>
                            <td>Akhir Kontrak</td>
                            <td><input type="date" name="akhir_kontrak" class="form-control" placeholder="Akhir Kontrak"></td>
                        </tr>

                        <tr>
                            <td>Masa Kontrak</td>
                            <td><input type="text" name="masa_kontrak" class="form-control" placeholder="Masa Kontrak"></td>
                        </tr>

                        <tr>
                            <td>Departemen</td>
                            <td> <select name="dept" id="id_dep" class="custom-select">
                                    <option value="">--PILIH DEPARTEMEN--</option>
                                    <?php foreach ($dept as $x) : ?>
                                        <option value="<?= $x->nama_dep; ?>"><?= $x->nama_dep; ?></option> <?php endforeach; ?>
                                </select> </td>
                        </tr>
                        <tr>
                            <td>Harga Sewa Unit</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Harga Sewa Unit" aria-label="Username" name="harga_sewa" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Jasa Driver</td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Jasa Driver" aria-label="Username" name="jasa_driver" aria-describedby="basic-addon1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Shifr</td>
                            <td><input type="text" name="shifr" class="form-control" placeholder="Shifr"></td>
                        </tr>

                        <tr>
                            <td>STNK Tahunan</td>
                            <td><input type="text" name="stnk_tahunan" class="form-control" placeholder="STNK Tahunan"></td>
                        </tr>

                        <tr>
                            <td>STNK Lima Tahun</td>
                            <td><input type="text" name="stnk_lima_tahun" class="form-control" placeholder="STNK Lima Tahun"></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <textarea name="ket" class="form-control" placeholder="Keterangan"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Foto Depan</td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="depan" id="depan">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Foto Belakang</td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="belakang" id="belakang">

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Foto Kanan</td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="kanan" id="kanan">

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Foto Kiri</td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="kiri" id="kiri">

                                </div>
                            </td>
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