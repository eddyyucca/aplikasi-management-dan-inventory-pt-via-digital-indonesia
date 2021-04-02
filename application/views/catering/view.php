<!-- Begin Page Content -->
<div class="container col-9">
    <div class="card shadow mb-4">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <table class="table">
                            <tr>
                                <td>Nama Mitra</td>
                                <td><?= $data->mitra; ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td><?= $data->alamat; ?></td>
                            </tr>

                            <tr>
                                <td>Kontrak Awal</td>
                                <td><?= $data->kontrak_awal; ?></td>
                            </tr>

                            <tr>
                                <td>Kontrak Akhir</td>
                                <td><?= $data->akhir_kontrak; ?></td>
                            </tr>


                            <tr>
                                <td>Selisih Hari</td>
                                <td><?php
                                    //hitung selisih tanggal
                                    $sekarang = date('Y-m-d');
                                    $datesekarang = new DateTime($sekarang);
                                    $akhir = new DateTime($data->akhir_kontrak);
                                    $date = $datesekarang->diff($akhir);
                                    echo "$date->days hari ";

                                    $date_color = $date->days;

                                    if ($date_color < 60) { ?>
                                        <button class="btn btn-danger"></button>
                                    <?php } elseif ($date_color > 30) { ?>
                                        <button class="btn btn-primary"></button>

                                    <?php } ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><?= $data->ket; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>