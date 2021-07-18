<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('hr/karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('hr/proses_ubah_karyawan/') . $getid->id_karyawan ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap" value="<?= $getid->nama_lengkap ?>" class="form-control" required placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan" class="form-control" value="<?= $getid->nama_panggilan ?>" required placeholder=" Nama panggilan"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><select class="form-control" name="jk">
                                    <option value="">--PILIH JENIS KELAMIN--</option>
                                    <option value="Laki-Laki" <?= "Laki-Laki" == $getid->jk ? 'selected=selected' : ''; ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= "Perempuan" == $getid->jk ? 'selected=selected' : ''; ?>>Perempuan</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat" class="form-control" required placeholder="Tempat" value="<?= $getid->tempat ?>">
                                <input type="date" value="<?= $getid->ttl ?>" name="ttl" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini" class="form-control"><?= $getid->alamat_saat_ini ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Alamat Permanen</td>
                            <td><textarea name="alamat_permanen" class="form-control"><?= $getid->alamat_permanen ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp" class="form-control" value="<?= $getid->no_telp ?>" required placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam" <?= "Islam" == $getid->agama ? 'selected=selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= "Kristen" == $getid->agama ? 'selected=selected' : ''; ?>>Kristen</option>
                                    <option value="Hindu" <?= "Hindu" == $getid->agama ? 'selected=selected' : ''; ?>>Hindu</option>
                                    <option value="Budha" <?= "Budha" == $getid->agama ? 'selected=selected' : ''; ?>>Budha</option>
                                    <option value="Konghucu" <?= "Konghucu" == $getid->agama ? 'selected=selected' : ''; ?>>Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegra" class="form-control" value="<?= $getid->warganegra ?>" required placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku" class="form-control" value="<?= $getid->suku ?>" required placeholder="Suku"></td>
                        </tr>


                        <tr>
                            <td>Tinggi Badan</td>
                            <td><input type="number" name="tinggi_badan" class="form-control" value="<?= $getid->tinggi_badan ?>" required placeholder="Tinggi Badan"></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td><input type="text" name="berat_badan" value="<?= $getid->berat_badan ?>" class="form-control" required placeholder="Berat Badan"></td>
                        </tr>
                        <tr>
                            <td>Rhesus</td>
                            <td><input type="text" name="rhesus" value="<?= $getid->rhesus ?>" class="form-control" required placeholder="Rhesus"></td>
                        </tr>
                        <tr>
                            <td>Ukuran Baju</td>
                            <td><input type="text" name="ukuran_baju" value="<?= $getid->ukuran_baju ?>" class="form-control" required placeholder="Ukuran Baju"></td>
                        </tr>
                        <tr>
                            <td>Ukuran Celana</td>
                            <td><input type="text" name="ukuran_celana" value="<?= $getid->ukuran_celana ?>" class="form-control" required placeholder="Ukuran Celana"></td>
                        </tr>
                        <tr>
                            <td>Ukuran Sepatu</td>
                            <td><input type="text" name="ukuran_sepatu" value="<?= $getid->ukuran_sepatu ?>" class="form-control" required placeholder="Ukuran Sepatu"></td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td><input type="text" name="hobi" class="form-control" value="<?= $getid->hobi ?>" required placeholder="Hobi"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control" value="<?= $getid->email ?>" required placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td>Departemen</td>
                            <td><select name="dep" class="form-control">
                                    <option value="">--PILIH DEPARTEMEN--</option>
                                    <?php foreach ($dep as $departemen) { ?>
                                        <option value="<?= $departemen->id ?>" <?= $departemen->id == $getid->id_dep ? 'selected=selected' : ''; ?>><?= $departemen->nama_dep ?></option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><select name="jab" class="form-control">
                                    <option value="">--PILIH JABATAN--</option>
                                    <?php foreach ($jab as $jabatan) { ?>
                                        <option value="<?= $jabatan->id_jab ?>" <?= $jabatan->id_jab == $getid->id_jab ? 'selected=selected' : ''; ?>><?= $jabatan->nama_jabatan ?></option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Status Karyawan</td>
                            <td><select name="status_karyawan" class="form-control">
                                    <option value="">--PILIH STATUS--</option>
                                    <option value="Aktif" <?= $getid->status_karyawan == "Aktif" ? 'selected=selected' : ''; ?>>Aktif</option>
                                    <option value="Berhenti" <?= $getid->status_karyawan == "Berhenti" ? 'selected=selected' : ''; ?>>Berhenti</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>Foto</td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomor Kependudukan</td>
                            <td><input type="number" name="no_ktp" value="<?= $getid->no_ktp ?>" class="form-control" required placeholder="Nomor Kependudukan"></td>
                        </tr>
                        <tr>
                            <td>Alamat KTP</td>
                            <td><input type="text" name="alamat_ktp" value="<?= $getid->alamat_ktp ?>" class="form-control" required placeholder="Alamat Pada KTP"></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku KTP</td>
                            <td><input type="date" class="form-control" value="<?= $getid->masa_berlaku_ktp ?>" name="masa_berlaku_ktp"></td>
                        </tr>
                        <tr>
                            <td>Nomor SIM A</td>
                            <td><input type="number" name="no_sim_a" value="<?= $getid->no_sim_a ?>" class="form-control" required placeholder="Nomor SIM A"></td>
                        </tr>
                        <tr>
                            <td>Alamat Pada SIM A</td>
                            <td><input type="text" name="alamat_sim_a" value="<?= $getid->alamat_sim_a ?>" class="form-control" required placeholder="Alamat Pada SIM A"></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku SIM A</td>
                            <td><input type="date" class="form-control" value="<?= $getid->masa_berlaku_sim_a ?>" name="masa_berlaku_sim_a"></td>
                        </tr>
                        <tr>
                            <td>Nomor SIM C</td>
                            <td><input type="number" name="no_sim_c" value="<?= $getid->no_sim_c ?>" class="form-control" required placeholder="Nomor SIM C"></td>
                        </tr>
                        <tr>
                            <td>Alamat Pada SIM C</td>
                            <td><input type="text" name="alamat_sim_c" value="<?= $getid->alamat_sim_c ?>" class="form-control" required placeholder="Alamat Pada SIM C"></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku SIM C</td>
                            <td><input type="date" class="form-control" value="<?= $getid->masa_berlaku_sim_c ?>" name="masa_berlaku_sim_c"></td>
                        </tr>
                        <tr>
                            <td>No NPWP</td>
                            <td><input type="number" name="no_npwp" value="<?= $getid->no_npwp ?>" class="form-control" required placeholder="No NPWP"></td>
                        </tr>
                        <tr>
                            <td>No BPJS Tenagakerja</td>
                            <td><input type="number" name="no_bpjs_tenagakerja" value="<?= $getid->no_bpjs_tenagakerja ?>" class="form-control" required placeholder="No BPJS Tenagakerja"></td>
                        </tr>
                        <tr>
                            <td>No BPJS Kesehatan</td>
                            <td><input type="number" name="no_bpjs_kes" value="<?= $getid->no_bpjs_kes ?>" class="form-control" required placeholder="No BPJS Kesehatan"></td>
                        </tr>
                        <tr>
                            <td>Nomor Passport</td>
                            <td><input type="number" name="no_passport" value="<?= $getid->no_passport ?>" class="form-control" required placeholder="Nomor Passport"></td>
                        </tr>
                        <tr>
                            <td>Alamat Pada Pasport</td>
                            <td><input type="text" name="alamat_passport" value="<?= $getid->alamat_passport ?>" class="form-control" required placeholder="Alamat Pada Passport"></td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku Passport</td>
                            <td><input type="date" class="form-control" value="<?= $getid->masa_berlaku_passport ?>" name="masa_berlaku_passport"></td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>