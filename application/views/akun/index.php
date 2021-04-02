<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Akun
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <?php if ($level_akun == "super_admin") { ?>
                            <a href="<?= base_url('super_admin/akun_admin') ?>" class="btn btn-danger">Tambah User</a>
                        <?php } elseif ($level_akun == "admin") { ?>
                            <a href="<?= base_url('akun/input') ?>" class="btn btn-danger">Tambah User</a>
                        <?php } ?>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Departemen</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- memanggil data user -->
                                <?php
                                $no = 1;
                                foreach ($departemen as $x) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $x->nama_user; ?></td>
                                            <td><?= $x->nama_dep; ?></td>
                                            <td><?= $x->level; ?></td>
                                            <td align="center">
                                                <a href="<?= base_url('akun/edit/') . $x->id; ?>" class="btn btn-primary">Edit</a>
                                                <a href="<?= base_url('akun/prosesHapus/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
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
    </div>
</div>