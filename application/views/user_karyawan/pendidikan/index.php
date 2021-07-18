<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Data Pendidikan
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_pendidikan') ?>">Tambah Pendidikan</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tingkatan</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Kota</th>
                            <th>Priode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pendidikan as $pen) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pen->tingkat_pendidikan ?></td>
                                <td><?= $pen->nama_sekolah ?></td>
                                <td><?php if ($pen->nama_jurusan == false) {
                                        echo "Tidak Ada Jurusan";
                                    } else {
                                        echo $pen->nama_jurusan;
                                    }  ?></td>
                                <td><?= $pen->kota_pendidikan ?></td>
                                <td><?= $pen->tahun_pendidikan ?></td>
                                <td>
                                    <a href="<?= base_url('user_karyawan/edit_pendidikan/') . $pen->id_pen ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('user_karyawan/hapus_pendidikan/') . $pen->id_pen ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i></a>

                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>