<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/prosestambahpendidikan') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Tingkat Pendidikan</td>
                                <td><select name="tingkat_pendidikan" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="Paud">Paud</option>
                                        <option value="TK">TK</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP/MTs">SMP/MTs</option>
                                        <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width=20%>Nama Sekolah</td>
                                <td>
                                    <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Jurusan</td>
                                <td>
                                    <input type="text" name="nama_jurusan" class="form-control" placeholder="Jurusan Sekolah">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Nama Kota Pendidikan</td>
                                <td>
                                    <input type="text" name="kota_pendidikan" class="form-control" placeholder="Kota Pendidikan">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Tahun</td>
                                <td>
                                    <input type="text" name="tahun_pendidikan" class="form-control">
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