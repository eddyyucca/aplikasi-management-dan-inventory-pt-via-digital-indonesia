<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan/data_istri') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/proseseditanak/') . $anak->id_anak ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap_anak" class="form-control" value="<?= $anak->nama_lengkap_anak ?>" value="<?= $anak->nama_lengkap_anak ?>" placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan_anak" class="form-control" value="<?= $anak->nama_panggilan_anak ?>" placeholder="Nama panggilan"></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat_anak" value="<?= $anak->tempat_anak ?>" class="form-control" placeholder="Tempat">
                                <input type="date" name="ttl_anak" value="<?= $anak->ttl_anak ?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><input type="text" name="no_ktp_anak" value="<?= $anak->no_ktp_anak ?>" class="form-control" placeholder="No KTP"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini_anak" class="form-control"><?= $anak->alamat_saat_ini_anak ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><select name="tingkat_pendidikan_anak" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Paud" <?= $anak->tingkat_pendidikan_anak ==  "PAUD" ? 'selected=selected' : ''; ?>>Paud</option>
                                    <option value="TK" <?= $anak->tingkat_pendidikan_anak ==  "TK"  ? 'selected=selected' : ''; ?>>TK</option>
                                    <option value="SD" <?= $anak->tingkat_pendidikan_anak ==  "SD"  ? 'selected=selected' : ''; ?>>SD</option>
                                    <option value="SMP/MTs" <?= $anak->tingkat_pendidikan_anak == "SMP/MTs"  ? 'selected=selected' : ''; ?>>SMP/MTs</option>
                                    <option value="SMA/SMK/MA" <?= $anak->tingkat_pendidikan_anak == "SMA/SMK/MA"  ? 'selected=selected' : ''; ?>>SMA/SMK/MA</option>
                                    <option value="S1" <?= $anak->tingkat_pendidikan_anak ==  "S1"  ? 'selected=selected' : ''; ?>>S1</option>
                                    <option value="S2" <?= $anak->tingkat_pendidikan_anak ==  "S2"  ? 'selected=selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= $anak->tingkat_pendidikan_anak ==  "S3"  ? 'selected=selected' : ''; ?>>S3</option>
                                </select></td>
                        </tr>
                        </td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp_anak" value="<?= $anak->no_telp_anak ?>" class="form-control" placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama_anak">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam" <?= $anak->agama_anak == "Islam" ? "selected=selected" : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $anak->agama_anak == "Kristen" ? "selected=selected" : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $anak->agama_anak == "Hindu" ? "selected=selected" : '' ?>>Hindu</option>
                                    <option value="Budha" <?= $anak->agama_anak == "Budha" ? "selected=selected" : '' ?>>Budha</option>
                                    <option value="Konghucu" <?= $anak->agama_anak == "Konghucu" ? "selected=selected" : '' ?>>Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegara_anak" value="<?= $anak->warganegara_anak ?>" class="form-control" placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku_anak" value="<?= $anak->suku_anak ?>" class="form-control" placeholder="Suku"></td>
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