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
                                <form action="<?= base_url('hr/prosesubahlevel/' . $data_karyawan->id_karyawan) ?>" method="post">
                                    <td><select name="level" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="admin_gudang" <?= $data_karyawan->level ==  "admin_gudang" ? 'selected=selected' : ''; ?>>Admin Gudang</option>
                                            <option value="admin_hr" <?= $data_karyawan->level ==  "admin_hr" ? 'selected=selected' : ''; ?>>Admin HR</option>
                                            <option value="user" <?= $data_karyawan->level ==  "user" ? 'selected=selected' : ''; ?>>User</option>
                                            <option value="kepala" <?= $data_karyawan->level ==  "kepala" ? 'selected=selected' : ''; ?>>Direktur</option>
                                        </select></td>
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