<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/prosestambah_riwayatpendidikan') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Nama Perusahaan</td>
                                <td>
                                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Bidang Usaha</td>
                                <td>
                                    <input type="text" name="bidang_usaha" class="form-control" placeholder="Bidang Usaha">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Jabatan Terakhir</td>
                                <td>
                                    <input type="text" name="jab_terakhir" class="form-control" placeholder="Jabatan Terakhir">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Gaji Terakhir</td>
                                <td>
                                    <input type="text" name="gaji_terakhir" class="form-control" placeholder="Gaji Terakhir">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Periode</td>
                                <td>
                                    <input type="text" name="periode" placeholder="Periode" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Alasan Berhenti</td>
                                <td>
                                    <textarea name="alasan_berhenti" class="form-control" cols="30" rows="10"></textarea>
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