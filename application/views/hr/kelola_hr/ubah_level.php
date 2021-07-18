<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold ">Data Karyawan</h6>
                </div>
                <div class="card-body">
                    <div class="container">


                        <table class="mt-2 ml-3">
                            <tr>
                                <td> NRP</td>
                                <td>: <?= $data_karyawan->id_karyawan ?> </td>
                            </tr>
                            <tr>
                                <td> Nama Lengkap</td>
                                <td>: <?= $data_karyawan->nama_lengkap ?> </td>
                            </tr>
                            <tr>
                                <td> Departemen</td>
                                <td>: <?= $data_karyawan->nama_dep ?> </td>
                            </tr>
                            <tr>
                                <td> Jabatan</td>
                                <td>: <?= $data_karyawan->nama_jabatan ?> </td>
                            </tr>
                            <tr>
                                <td> Level</td>
                                <form action="<?= base_url('dev/prosesubahlevel/' . $data_karyawan->id_karyawan) ?>" method="post">
                                    <?php if ($data_karyawan->level == "kepala_gs") { ?>
                                        <td><select name="level" class="form-control" disabled>
                                                <option value="">--Pilih--</option>
                                                <option value="admin" <?= $data_karyawan->level ==  "admin" ? 'selected=selected' : ''; ?>>Admin GS</option>
                                                <option value="hr_admin" <?= $data_karyawan->level ==  "hr_admin" ? 'selected=selected' : ''; ?>>Admin HR</option>
                                                <option value="admin_dep" <?= $data_karyawan->level ==  "admin_dep" ? 'selected=selected' : ''; ?>>Admin Departemen</option>
                                                <option value="kepala_gs" <?= $data_karyawan->level ==  "kepala_gs" ? 'selected=selected' : ''; ?>>Kepala GS</option>
                                                <option value="user" <?= $data_karyawan->level ==  "user" ? 'selected=selected' : ''; ?>>User Biasa</option>
                                            </select></td>
                                    <?php  } else { ?>
                                        <td><select name="level" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option value="admin" <?= $data_karyawan->level ==  "admin" ? 'selected=selected' : ''; ?>>Admin GS</option>
                                                <option value="hr_admin" <?= $data_karyawan->level ==  "hr_admin" ? 'selected=selected' : ''; ?>>Admin HR</option>
                                                <option value="admin_dep" <?= $data_karyawan->level ==  "admin_dep" ? 'selected=selected' : ''; ?>>Admin Departemen</option>
                                                <option value="user" <?= $data_karyawan->level ==  "user" ? 'selected=selected' : ''; ?>>User Biasa</option>
                                            </select></td>
                                    <?php } ?>
                            <tr>
                                <td colspan="2" align="center">
                                    <button class="btn btn-primary mt-2">Ubah</button>
                                </td>
                            </tr>
                            </form>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>