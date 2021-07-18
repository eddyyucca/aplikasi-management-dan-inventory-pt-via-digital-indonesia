<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Data Absen Bulanan
            </div>
            <div class="card-body">

                <form action="<?= base_url('user_karyawan/data_absen') ?>" method="post">
                    <div class="input-group mb-3 col-6">
                        <div class="form-group mr-1">
                            <select name="bulan" id="" class="custom-select">
                                <option value="">--PILIH Bulan--</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mai</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <input type="hidden" value="cari">
                        <div class="form-group">
                            <input type="text" class="form-control" name="tahun" placeholder="Tahun">
                            <input type="hidden" class="form-control" name="cari" value="true">
                        </div>
                        <div class="form-group ml-2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="table-responsive">
                        <div class="container">

                            <?php if ($data == true) { ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Ket</th>
                                            <th>OVERTIME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $x) : ?>
                                            <tr>
                                                <td align="center"><?= $no++ ?></td>
                                                <td><?= $x->bulan ?></td>
                                                <td><?= $x->tahun ?></td>
                                                <td><?= $x->ket ?></td>
                                                <td><a href="<?= base_url('assets/excel/' . $x->excel) ?>"><?= $x->excel ?></a></td>
                                            </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            <?php } elseif ($data == false) { ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Ket</th>
                                            <th>OVERTIME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center" colspan="5">--Data Kosong--</td>
                                        </tr>
                                    </tbody>
                                <?php  } ?>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>