<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Absen Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="container">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NRP</th>
                            <th>NAMA</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_karyawan as $k) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $k->id_karyawan ?></td>
                                <td><?= $k->nama_lengkap ?></td>
                                <td align="center"><a href="<?= base_url('hr/tambah_absen/') . $k->id_karyawan ?>" class="btn btn-primary">Tambah Absen</a></td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>