<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Data Orang Tua
            </div>
            <div class="card-body">

                <?php
                if ($ortu == true) { ?>
                    <!-- ayah -->
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold">Data Orang Tua Laki-Laki</h6>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown no-arrow mb-4">
                                        <table border="0">
                                            <table border="0">
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td> : <?= $ortu->nama_lengkap_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td> : <?= $ortu->nama_panggilan_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>TTL</td>
                                                    <td> : <?= $ortu->tempat_ortu_lk  ?> <?= $ortu->ttl_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No KTP</td>
                                                    <td> : <?= $ortu->no_ktp_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td> : <?= $ortu->alamat_saat_ini_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td> : <?= $ortu->tingkat_pendidikan_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Telpon</td>
                                                    <td> : <?= $ortu->no_telp_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td> : <?= $ortu->agama_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Warganegara</td>
                                                    <td> : <?= $ortu->warganegara_ortu_lk ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Suku</td>
                                                    <td> : <?= $ortu->suku_ortu_lk ?></td>
                                                </tr>

                                            </table>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ayah end -->
                    <!-- ibu -->
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold">Data Orang Tua Perempuan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="dropdown no-arrow mb-4">
                                        <table border="0">
                                            <table border="0">
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td> : <?= $ortu->nama_lengkap_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td> : <?= $ortu->nama_panggilan_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>TTL</td>
                                                    <td> : <?= $ortu->tempat_ortu_pr  ?> <?= $ortu->ttl_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No KTP</td>
                                                    <td> : <?= $ortu->no_ktp_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td> : <?= $ortu->alamat_saat_ini_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td> : <?= $ortu->tingkat_pendidikan_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Telpon</td>
                                                    <td> : <?= $ortu->no_telp_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td> : <?= $ortu->agama_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Warganegara</td>
                                                    <td> : <?= $ortu->warganegara_ortu_pr ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Suku</td>
                                                    <td> : <?= $ortu->suku_ortu_pr ?></td>
                                                </tr>

                                            </table>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ibu end -->
                    <div class="row justify-content-center">
                        <a href="<?= base_url('user_karyawan/edit_orangtua/') . $ortu->id_ortu ?>" class="btn btn-primary mr-2">Edit</a>
                        <a href="<?= base_url('user_karyawan/hapus_orangtua/') . $ortu->id_ortu ?>" class="btn btn-danger">Hapus</a>
                    </div>
                <?php   } elseif ($ortu == false) { ?>
                    <a class="btn btn-primary" href="<?= base_url('user_karyawan/tambah_data_orangtua') ?>">Tambah Data Orang Tua</a>
                    <hr>
                    <table border="0">

                    </table>
                <?php } ?>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>