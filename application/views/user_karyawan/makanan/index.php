<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('user_karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('user_karyawan/prosesordermakan') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Tanggal</td>
                                <td>
                                    <input type="date" name="tanggal_pesanan" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Mess</td>
                                <td><select name="nama_mess" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($mess_2 as $x) { ?>
                                            <option value="<?= $x->mess_lahan ?>"><?= $x->mess_lahan ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Pilih Waktu</td>
                                <td>
                                    <p>Hanya Boleh Memesan Dua Waktu :</p>
                                    <p><input type="checkbox" name="waktu[]" value="Pagi" /> Pagi</p>
                                    <p><input type="checkbox" name="waktu[]" value="Siang" /> Siang</p>
                                    <p><input type="checkbox" name="waktu[]" value="Sore" /> Sore</p>
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