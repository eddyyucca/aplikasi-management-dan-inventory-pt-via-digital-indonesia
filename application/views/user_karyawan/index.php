<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('hr/karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card-body">
                <?= $pesan ?>

                <div class="row">
                    <div class="col-4">
                        <img class="shadow" <?php
                                            if ($data->foto == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php
                                                                                                                        } else {
                                                                                                                            ?> src="<?= base_url('assets/foto_profil/' . $data->foto) ?>" <?php
                                                                                                                                                                                        } ?> "
                              alt=" Profil" class="card-img-top" data-holder-rendered="true" style="height: 275px; width: 225px; display: block;">
                    </div>
                    <div class="col-6">

                        <table class="mt-1 ml-1">
                            <tr>
                                <td> ID Karyawan</td>
                                <td>: <?= $data->id_karyawan ?> </td>
                            </tr>
                            <tr>
                                <td> Nama</td>
                                <td>: <?= $data->nama_lengkap ?> </td>
                            </tr>
                            <tr>
                                <td> Departemen</td>
                                <td>: <?= $data->nama_dep ?> </td>
                            </tr>
                            <tr>
                                <td> Jabatan </td>
                                <td>: <?= $data->nama_jabatan ?> </td>
                            </tr>
                            <tr>
                                <td> TTL </td>
                                <td>: <?= $data->tempat ?> <?= $data->ttl ?> </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td>: <?= $data->alamat_saat_ini ?> </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td>: <?= $data->email ?> </td>
                            </tr>
                            <tr>
                                <td> No Telpon </td>
                                <td>: <?= $data->no_telp ?> </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>



        <div class="col-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#data_diri" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="data_diri">
                    <h6 class="m-0 font-weight-bold text-primary">data_diri</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="data_diri">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td> NRP</td>
                                <td>: <?= $data1["id_karyawan"] ?> </td>
                            </tr>
                            <tr>
                                <td> Nama Lengkap</td>
                                <td>: <?= $data1["nama_lengkap"] ?> </td>
                            </tr>
                            <tr>
                                <td> Nama Panggilan</td>
                                <td>: <?= $data1["nama_panggilan"] ?> </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: <?= $data1["jk"] ?> </td>
                            </tr>
                            <tr>
                                <td> TTL </td>
                                <td>: <?= $data1["tempat"] ?> <?= $data1["ttl"] ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat Saat Ini</td>
                                <td>: <?= $data1["alamat_saat_ini"] ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat Permanen</td>
                                <td>: <?= $data1["alamat_permanen"] ?> </td>
                            </tr>
                            <tr>
                                <td>Telpon</td>
                                <td>: <?= $data1["no_telp"] ?> </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>: <?= $data1["agama"] ?> </td>
                            </tr>

                            <tr>
                                <td>No KTP</td>
                                <td>: <?= $data1["no_ktp"] ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td>: <?= $data1["alamat_ktp"] ?> </td>
                            </tr>


                            <tr>
                                <td>Tinggi Badan</td>
                                <td>: <?= $data1["tinggi_badan"] ?> </td>
                            </tr>

                            <tr>
                                <td>Ukuran Baju</td>
                                <td>: <?= $data1["ukuran_baju"] ?> </td>
                            </tr>

                            <tr>
                                <td>Hobi</td>
                                <td>: <?= $data1["hobi"] ?> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
</div>