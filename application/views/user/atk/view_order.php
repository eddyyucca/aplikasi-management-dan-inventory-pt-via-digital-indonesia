<div class="container col-8">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="card-header">
                    <a href="<?= base_url('user/atk/atk') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-auto">
                                    <?php
                                    if ($data == false) {
                                        echo "<h1>Data Tidak Ditemukan</h1>";
                                    } else { ?>

                                        <form action="<?= base_url('user/ProsesOrder/' . $data->id); ?>" method="post">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <h3>Nama item </h3>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td width="600px">
                                                        <h3><?= $data->item; ?></h3>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h3>Jumlah stok</h3>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>
                                                        <h3><?= $data->qty; ?></h3>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h3>Satuan</h3>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>
                                                        <h3><?= $data->satuan; ?></h3>
                                                    </td>
                                                </tr>

                                                <tr width="100%">
                                                    <td>
                                                        <H4>Order</H4>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>

                                                        <?php if ($data->qty < 1) {
                                                            echo "<h3>Stok Kosong</h3>";
                                                        ?>

                                                        <?php } else { ?>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn lm-2 input-group-prepend">

                                                                    </span>
                                                                    <input type="hidden" name="item" value="<?= $data->item; ?>">
                                                                    <input type="hidden" name="satuan" value="<?= $data->satuan; ?>">
                                                                    <input class="form-control" name="qty" step="1" data-step-max="10" type="number" value="1" data-decimals="0" min="1" max="<?= $data->qty; ?>">
                                                                    <span class="input-group-btn lm-2 input-group-append">

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <div>

                                                </div>
                                            </table>
                                            <hr>
                                            <td align="center">
                                                <?php if ($data->qty < 1) {
                                                    echo '<button type="submit" class="btn btn-primary" disabled>Order</button>';
                                                } else { ?>
                                                    <button type="submit" class="btn btn-primary">Order</button>
                                                <?php } ?>
                                            </td>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>