<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <a class="btn btn-primary" href="<?= base_url('hr/tambah_karyawan') ?>">Karyawan Baru</a>
                <a class="btn btn-danger" href="<?= base_url('hr/laporan_pdf') ?>">Print PDF</a>
                <a class="btn btn-success" href="<?= base_url('hr/laporan_excel') ?>">Print Excel</a>
                <hr>
                <?= $this->session->flashdata('tambah_karyawan'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NRP</th>
                                <th>NAMA</th>
                                <th>Dep</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_karyawan as $x) { ?>
                                    <td align="center"><?= $no++ ?></td>
                                    <td><?= $x->id_karyawan ?></td>
                                    <td><?= $x->nama_lengkap ?></td>
                                    <td><?= $x->nama_dep ?></td>
                                    <td> <a href="<?= base_url('hr/view_karyawan/') . $x->id_karyawan; ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></a>

                                        <a href="<?= base_url('hr/ubah_karyawan/') . $x->id_karyawan; ?>" class="btn btn-secondary">Ubah</i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>