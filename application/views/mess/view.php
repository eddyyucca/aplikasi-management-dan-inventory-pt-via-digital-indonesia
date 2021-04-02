<!-- Begin Page Content -->
<div class="container col-9">
    <div class="card shadow mb-4">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('mess') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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
                                <td>Nama Pemilik Rumah</td>
                                <td><?= $data->nama_perum; ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td><?= $data->alamat; ?></td>
                            </tr>

                            <tr>
                                <td>No Telpon</td>
                                <td><?= $data->no_telp; ?></td>
                            </tr>

                            <tr>
                                <td>No Speedy</td>
                                <td><?= $data->no_speedy; ?></td>
                            </tr>

                            <tr>
                                <td>No FAX</td>
                                <td><?= $data->no_fax; ?></td>
                            </tr>

                            <tr>
                                <td>No OK Vesion</td>
                                <td><?= $data->no_okvision; ?></td>
                            </tr>

                            <tr>
                                <td>No Listrik</td>
                                <td><?= $data->no_listrik; ?></td>
                            </tr>

                            <tr>
                                <td>No PDAM</td>
                                <td><?= $data->no_pdam; ?></td>
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
                                <td>Harga Sewa </td>
                                <td><?= $data->harga_sewa; ?></td>
                            </tr>

                            <tr>
                                <td>Kapasitas</td>
                                <td><?= $data->kapasitas; ?></td>
                            </tr>

                            <tr>
                                <td>Jumlah Kamar</td>
                                <td><?= $data->jumlah_kamar; ?></td>
                            </tr>

                            <tr>
                                <td>Kapasitas</td>
                                <td><?= $data->kapasitas; ?></td>
                            </tr>

                            <tr>
                                <td>Perjanjian</td>
                                <td><?= $data->perjanjian; ?></td>
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