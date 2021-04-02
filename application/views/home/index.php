<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Menu
            </div>
            <div class="card-body">
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ATK</div>
                                        <a href="<?= base_url('atk/view_data') ?>" class="btn btn-primary"><i class="fas fa-pencil-ruler fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-pencil-ruler fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">SARANA</div>
                                        <!-- membuat info habis kontrak -->
                                        <?php
                                        $no = 1;
                                        foreach ($data_sarana as $x1) {
                                            $sekarang1 = date('Y-m-d');
                                            $datesekarang1 = new DateTime($sekarang1);
                                            $akhir1 = new DateTime($x1->akhir_kontrak);
                                            $date1 = $datesekarang1->diff($akhir1);
                                            $date_color1 = $date1->days;

                                            if ($date_color1 < "60") {
                                                $warna1 = "btn btn-danger";
                                                $no++ > 1;
                                                break;
                                            } else {
                                                $warna1 = "btn btn-primary";
                                            }
                                        }
                                        ?>

                                        <!-- end -->
                                        <a href="<?= base_url('sarana/index') ?>" class="<?= $warna1 ?> "><i class="fas fa-truck-pickup fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-truck-pickup fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CATERING</div>
                                        <!-- membuat info habis kontrak -->
                                        <?php
                                        $no2 = 1;
                                        foreach ($data_catering as $x2) {
                                            $sekarang2 = date('Y-m-d');
                                            $datesekarang2 = new DateTime($sekarang2);
                                            $akhir2 = new DateTime($x2->akhir_kontrak);
                                            $date2 = $datesekarang2->diff($akhir2);
                                            $date_color2 = $date2->days;

                                            if ($date_color2 < "60") {
                                                $warna2 = "btn btn-danger";
                                                $no2++ > 1;
                                                break;
                                            } else {
                                                $warna2 = "btn btn-primary";
                                            }
                                        }
                                        ?>

                                        <!-- end -->
                                        <a href="<?= base_url('catering/index') ?>" class="<?= $warna2 ?>"><i class="fas fa-utensils fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-utensils fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MESS</div>
                                        <!-- membuat info habis kontrak -->
                                        <?php
                                        $no3 = 1;
                                        foreach ($data_mess as $x3) {
                                            $sekarang3 = date('Y-m-d');
                                            $datesekarang3 = new DateTime($sekarang3);
                                            $akhir3 = new DateTime($x3->akhir_kontrak);
                                            $date3 = $datesekarang3->diff($akhir3);
                                            $date_color3 = $date3->days;

                                            if ($date_color3 < "60") {
                                                $warna3 = "btn btn-danger";
                                                $no3++ > 1;
                                                break;
                                            } else {
                                                $warna3 = "btn btn-primary";
                                            }
                                        }
                                        ?>

                                        <!-- end -->
                                        <a href="<?= base_url('mess/index') ?>" class="<?= $warna3 ?>"><i class="fas fa-home fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-home fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Seragam</div>
                                        <a href="<?= base_url('seragam/index') ?>" class="btn btn-primary"><i class="fas fa-home fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-home fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>