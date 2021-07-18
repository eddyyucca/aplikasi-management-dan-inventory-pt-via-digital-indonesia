<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan/data_istri') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/prosestambahanak/') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td width=20%>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap_anak" class="form-control" placeholder="Nama Lengkap"></td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td><input type="text" name="nama_panggilan_anak" class="form-control" placeholder="Nama panggilan"></td>
                        </tr>

                        <tr>
                            <td>Tempat/Tanggal/Lahir</td>
                            <td><input type="text" name="tempat_anak" class="form-control" placeholder="Tempat">
                                <input type="date" name="ttl_anak" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><input type="text" name="no_ktp_anak" class="form-control" placeholder="No KTP"></td>
                        </tr>
                        <tr>
                            <td>Alamat Saat Ini</td>
                            <td><textarea name="alamat_saat_ini_anak" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><select name="tingkat_pendidikan_anak" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Paud">Paud</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="text" name="no_telp_anak" class="form-control" placeholder="Telpon"></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> <select class="form-control" name="agama_anak">
                                    <option value="">--AGAMA--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>kewarganegaraan</td>
                            <td><input type="text" name="warganegara_anak" class="form-control" placeholder="kewarganegaraan"></td>
                        </tr>
                        <tr>
                            <td>Suku</td>
                            <td><input type="text" name="suku_anak" class="form-control" placeholder="Suku"></td>
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