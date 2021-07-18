<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/proseseditpendidikan/') . $pendidikan->id_pen ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Tingkat Pendidikan</td>
                                <td><select name="tingkat_pendidikan" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="Paud" <?= $pendidikan->tingkat_pendidikan ==  "PAUD" ? 'selected=selected' : ''; ?>>Paud</option>
                                        <option value="TK" <?= $pendidikan->tingkat_pendidikan ==  "TK"  ? 'selected=selected' : ''; ?>>TK</option>
                                        <option value="SD" <?= $pendidikan->tingkat_pendidikan ==  "SD"  ? 'selected=selected' : ''; ?>>SD</option>
                                        <option value="SMP/MTs" <?= $pendidikan->tingkat_pendidikan == "SMP/MTs"  ? 'selected=selected' : ''; ?>>SMP/MTs</option>
                                        <option value="SMA/SMK/MA" <?= $pendidikan->tingkat_pendidikan == "SMA/SMK/MA"  ? 'selected=selected' : ''; ?>>SMA/SMK/MA</option>
                                        <option value="S1" <?= $pendidikan->tingkat_pendidikan ==  "S1"  ? 'selected=selected' : ''; ?>>S1</option>
                                        <option value="S2" <?= $pendidikan->tingkat_pendidikan ==  "S2"  ? 'selected=selected' : ''; ?>>S2</option>
                                        <option value="S3" <?= $pendidikan->tingkat_pendidikan ==  "S3"  ? 'selected=selected' : ''; ?>>S3</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width=20%>Nama Sekolah</td>
                                <td>
                                    <input type="text" name="nama_sekolah" class="form-control" value="<?= $pendidikan->nama_sekolah ?>" placeholder="Nama Sekolah">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Jurusan</td>
                                <td>
                                    <input type="text" name="nama_jurusan" value="<?= $pendidikan->nama_jurusan ?>" class="form-control" placeholder="Jurusan Sekolah">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Nama Kota Pendidikan</td>
                                <td>
                                    <input type="text" name="kota_pendidikan" value="<?= $pendidikan->kota_pendidikan ?>" class="form-control" placeholder="Kota Pendidikan">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Tahun</td>
                                <td>
                                    <input type="text" name="tahun_pendidikan" value="<?= $pendidikan->tahun_pendidikan ?>" class="form-control">
                                </td>
                            </tr>

                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>