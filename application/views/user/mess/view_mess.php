<!-- Begin Page Content -->
<div class="container col-9">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('user/mess') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <table class="table">
                        <tr>
                            <td>Nama Mess/Lahan</td>
                            <td><?= $data->mess_lahan; ?></td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td><?= $data->alamat; ?></td>
                        </tr>


                        <tr>
                            <td>Awal Kontrak</td>
                            <td><?= $data->awal_kontrak; ?></td>
                        </tr>

                        <tr>
                            <td>akhir_kontrak</td>
                            <td><?= $data->akhir_kontrak; ?></td>
                        </tr>

                        <tr>
                            <td>Jumlah Kamar</td>
                            <td><?= $data->jumlah_kamar; ?></td>
                        </tr>

                        <tr>
                            <td>Kapasitas</td>
                            <td><?= $data->kapasitas; ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>