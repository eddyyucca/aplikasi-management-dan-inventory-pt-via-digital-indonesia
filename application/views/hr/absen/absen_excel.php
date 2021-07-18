<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('hr/karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('hr/prosesabsen') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Bulan</td>
                            <td>
                                <select name="bulan" id="" class="custom-select">
                                    <option value="">--PILIH Bulan--</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="text" name="tahun" placeholder="Tahun" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width=20%>Keterangan</td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width=20%>Input Excel</td>
                            <td><input type="file" name="file" id="file" class="form-control"></td>
                        </tr>
                        <input type="hidden" name="id_kar" value="<?= $id_kar ?>">
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