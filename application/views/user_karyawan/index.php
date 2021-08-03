<div class="container-fluid">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Profil <?= $data["nama_lengkap"] ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img class="shadow" <?php
                                            if ($data["foto"] == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php
                                                                                                                            } else {
                                                                                                                                ?> src="<?= base_url('assets/foto_profil/' . $data["foto"]) ?>" <?php
                                                                                                                                                                                            } ?> "
                              alt=" Foto Profil" class="card-img-top" data-holder-rendered="true" style="height: 275px; width: 225px; display: block;">


                    </div>
                    <div class="col-6">

                        <table class="mt-2 ml-3">
                            <tr>
                                <td> NRP</td>
                                <td>: <?= $data["id_karyawan"] ?> </td>
                            </tr>
                            <tr>
                                <td> Nama</td>
                                <td>: <?= $data["nama_lengkap"] ?> </td>
                            </tr>
                            <tr>
                                <td> Departemen</td>
                                <td>: <?= $data["nama_dep"] ?> </td>
                            </tr>
                            <tr>
                                <td> Jabatan </td>
                                <td>: <?= $data["nama_jabatan"] ?> </td>
                            </tr>
                            <tr>
                                <td> TTL </td>
                                <td>: <?= $data["tempat"] ?> <?= $data["ttl"] ?> </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td>: <?= $data["alamat_saat_ini"] ?> </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td>: <?= $data["email"] ?> </td>
                            </tr>
                            <tr>
                                <td> No Telpon </td>
                                <td>: <?= $data["no_telp"] ?> </td>
                            </tr>
                            <tr>
                                <td> Mess </td>
                                <td>: <?= $data["mess"] ?> </td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>



        <!-- end row -->
    </div>
</div>