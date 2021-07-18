<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('hr/karyawan') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    Perhatian : Jam kerja wajib 7 jam 1 jam pertama adalah 1.5 overtime dan jam berikutnya di kali 2
                    <hr>
                    <?= $this->session->flashdata('excel'); ?>
                    <?= $this->session->flashdata('excel_gagal'); ?>
                    <?= $this->session->flashdata('date'); ?>
                    <form action="<?= base_url('hr/prosesabsenmanual/' . $date->id_absen) ?>" method="POST" enctype="multipart/form-data" />

                    <table class="table">
                        <tr>
                            <td width=20%>Waktu In</td>
                            <td><input type="text" name="in" value="<?= $date->in ?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width=20%>Waktu Out</td>
                            <td><input type="text" name="out" value="<?= $date->out ?>" class="form-control"></td>
                        </tr>

                        <tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>