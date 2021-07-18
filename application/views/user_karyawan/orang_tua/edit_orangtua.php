<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan/data_istri') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/proseseditorangtua/') . $ortu->id_ortu ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td colspan="2" align="center">
                                <h1>Orang Tua Laki-Laki</h1>
                            </td>
                        </tr>
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap_ortu_lk" class="form-control" value="<?= $ortu->nama_lengkap_ortu_lk ?>" placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan_ortu_lk" value="<?= $ortu->nama_panggilan_ortu_lk ?>" class="form-control" placeholder="Nama panggilan"></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat_ortu_lk" value="<?= $ortu->tempat_ortu_lk ?>" class="form-control" placeholder="Tempat">
                                <input type="date" name="ttl_ortu_lk" value="<?= $ortu->ttl_ortu_lk ?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><input type="text" name="no_ktp_ortu_lk" value="<?= $ortu->no_ktp_ortu_lk ?>" class="form-control" placeholder="No KTP"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini_ortu_lk" class="form-control"><?= $ortu->alamat_saat_ini_ortu_lk ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><select name="tingkat_pendidikan_ortu_lk" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Paud" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "PAUD" ? 'selected=selected' : ''; ?>>Paud</option>
                                    <option value="TK" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "TK"  ? 'selected=selected' : ''; ?>>TK</option>
                                    <option value="SD" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "SD"  ? 'selected=selected' : ''; ?>>SD</option>
                                    <option value="SMP/MTs" <?= $ortu->tingkat_pendidikan_ortu_lk == "SMP/MTs"  ? 'selected=selected' : ''; ?>>SMP/MTs</option>
                                    <option value="SMA/SMK/MA" <?= $ortu->tingkat_pendidikan_ortu_lk == "SMA/SMK/MA"  ? 'selected=selected' : ''; ?>>SMA/SMK/MA</option>
                                    <option value="S1" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "S1"  ? 'selected=selected' : ''; ?>>S1</option>
                                    <option value="S2" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "S2"  ? 'selected=selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= $ortu->tingkat_pendidikan_ortu_lk ==  "S3"  ? 'selected=selected' : ''; ?>>S3</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp_ortu_lk" value="<?= $ortu->no_telp_ortu_lk ?>" class="form-control" placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama_ortu_lk">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam" <?= $ortu->agama_ortu_lk == "Islam" ? "selected=selected" : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $ortu->agama_ortu_lk == "Kristen" ? "selected=selected" : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $ortu->agama_ortu_lk == "Hindu" ? "selected=selected" : '' ?>>Hindu</option>
                                    <option value="Budha" <?= $ortu->agama_ortu_lk == "Budha" ? "selected=selected" : '' ?>>Budha</option>
                                    <option value="Konghucu" <?= $ortu->agama_ortu_lk == "Konghucu" ? "selected=selected" : '' ?>>Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegara_ortu_lk" value="<?= $ortu->warganegara_ortu_lk ?>" class="form-control" placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku_ortu_lk" value="<?= $ortu->suku_ortu_lk ?>" class="form-control" placeholder="Suku"></td>
                        </tr>
                        <tr>

                        <tr>
                            <td>
                                <hr>
                            </td>
                            <td>
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <h1>Orang Tua Perempuan</h1>
                            </td>
                        </tr>
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap_ortu_pr" value="<?= $ortu->nama_lengkap_ortu_pr ?>" class="form-control" placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan_ortu_pr" value="<?= $ortu->nama_panggilan_ortu_pr ?>" class="form-control" placeholder="Nama panggilan"></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat_ortu_pr" value="<?= $ortu->tempat_ortu_pr ?>" class="form-control" placeholder="Tempat">
                                <input type="date" name="ttl_ortu_pr" value="<?= $ortu->ttl_ortu_pr ?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><input type="text" name="no_ktp_ortu_pr" value="<?= $ortu->no_ktp_ortu_pr ?>" class="form-control" placeholder="No KTP"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini_ortu_pr" class="form-control"><?= $ortu->alamat_saat_ini_ortu_pr ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><select name="tingkat_pendidikan_ortu_pr" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Paud" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "PAUD" ? 'selected=selected' : ''; ?>>Paud</option>
                                    <option value="TK" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "TK"  ? 'selected=selected' : ''; ?>>TK</option>
                                    <option value="SD" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "SD"  ? 'selected=selected' : ''; ?>>SD</option>
                                    <option value="SMP/MTs" <?= $ortu->tingkat_pendidikan_ortu_pr == "SMP/MTs"  ? 'selected=selected' : ''; ?>>SMP/MTs</option>
                                    <option value="SMA/SMK/MA" <?= $ortu->tingkat_pendidikan_ortu_pr == "SMA/SMK/MA"  ? 'selected=selected' : ''; ?>>SMA/SMK/MA</option>
                                    <option value="S1" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "S1"  ? 'selected=selected' : ''; ?>>S1</option>
                                    <option value="S2" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "S2"  ? 'selected=selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= $ortu->tingkat_pendidikan_ortu_pr ==  "S3"  ? 'selected=selected' : ''; ?>>S3</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp_ortu_pr" value="<?= $ortu->no_telp_ortu_pr ?>" class="form-control" placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama_ortu_pr">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam" <?= $ortu->agama_ortu_pr == "Islam" ? "selected=selected" : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $ortu->agama_ortu_pr == "Kristen" ? "selected=selected" : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $ortu->agama_ortu_pr == "Hindu" ? "selected=selected" : '' ?>>Hindu</option>
                                    <option value="Budha" <?= $ortu->agama_ortu_pr == "Budha" ? "selected=selected" : '' ?>>Budha</option>
                                    <option value="Konghucu" <?= $ortu->agama_ortu_pr == "Konghucu" ? "selected=selected" : '' ?>>Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegara_ortu_pr" value="<?= $ortu->warganegara_ortu_pr ?>" class="form-control" placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku_ortu_pr" value="<?= $ortu->suku_ortu_pr ?>" class="form-control" placeholder="Suku"></td>
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