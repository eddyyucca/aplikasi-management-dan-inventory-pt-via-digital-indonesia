<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan/data_pasangan/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/proseseditpasangan/') . $pasangan->id_pasangan ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap_pasangan" value="<?= $pasangan->nama_lengkap_pasangan ?>" class="form-control" placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan_pasangan" value="<?= $pasangan->nama_panggilan_pasangan ?>" class="form-control" placeholder="Nama panggilan"></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat_pasangan" value="<?= $pasangan->tempat_pasangan ?>" class="form-control" placeholder="Tempat">
                                <input type="date" name="ttl_pasangan" value="<?= $pasangan->ttl_pasangan ?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><input type="text" name="no_ktp_pasangan" value="<?= $pasangan->no_ktp_pasangan ?>" class="form-control" placeholder="No KTP"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini_pasangan" value="<?= $pasangan->alamat_saat_ini_pasangan ?>" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><select name="tingkat_pendidikan_pasangan" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Paud" <?= $pasangan->pendidikan_pasangan ==  "PAUD" ? 'selected=selected' : ''; ?>>Paud</option>
                                    <option value="TK" <?= $pasangan->pendidikan_pasangan ==  "TK"  ? 'selected=selected' : ''; ?>>TK</option>
                                    <option value="SD" <?= $pasangan->pendidikan_pasangan ==  "SD"  ? 'selected=selected' : ''; ?>>SD</option>
                                    <option value="SMP/MTs" <?= $pasangan->pendidikan_pasangan == "SMP/MTs"  ? 'selected=selected' : ''; ?>>SMP/MTs</option>
                                    <option value="SMA/SMK/MA" <?= $pasangan->pendidikan_pasangan == "SMA/SMK/MA"  ? 'selected=selected' : ''; ?>>SMA/SMK/MA</option>
                                    <option value="S1" <?= $pasangan->pendidikan_pasangan ==  "S1"  ? 'selected=selected' : ''; ?>>S1</option>
                                    <option value="S2" <?= $pasangan->pendidikan_pasangan ==  "S2"  ? 'selected=selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= $pasangan->pendidikan_pasangan ==  "S3"  ? 'selected=selected' : ''; ?>>S3</option>
                                </select></td>
                            </td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp_pasangan" class="form-control" value="<?= $pasangan->telpon_pasangan ?>" placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama_pasangan">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam" <?= $pasangan->agama_pasangan == "Islam" ? "selected=selected" : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $pasangan->agama_pasangan == "Kristen" ? "selected=selected" : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $pasangan->agama_pasangan == "Hindu" ? "selected=selected" : '' ?>>Hindu</option>
                                    <option value="Budha" <?= $pasangan->agama_pasangan == "Budha" ? "selected=selected" : '' ?>>Budha</option>
                                    <option value="Konghucu" <?= $pasangan->agama_pasangan == "Konghucu" ? "selected=selected" : '' ?>>Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegra_pasangan" value="<?= $pasangan->warganegra_pasangan ?>" class="form-control" placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku_pasangan" value="<?= $pasangan->suku_pasangan ?>" class="form-control" placeholder="Suku"></td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>