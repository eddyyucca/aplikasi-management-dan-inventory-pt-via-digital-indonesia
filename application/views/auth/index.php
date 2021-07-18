<div class="container">
    <div class="row justify-content-center">
        <!-- Create Organization-->
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
            <div class="card text-center h-100">
                <div class="card-body px-5 pt-5 d-flex flex-column">
                    <div>
                        <div class="h3 text-secondary font-weight-300">Admin</div>
                        <p class="text-muted mb-4">Lakukan login sebagai admin</p>
                    </div>
                    <div class="icons-org-create align-items-center mx-auto mt-auto">
                        <i class="icon-users" data-feather="users"></i>
                        <i class="icon-plus fas fa-plus"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent px-5 py-4">
                    <div class="small text-center"><a class="btn btn-block btn-primary" href="<?= base_url('auth/admin') ?> ">Admin</a></div>
                </div>
            </div>
        </div>
        <!-- Join Organization-->
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
            <div class="card text-center h-100">
                <div class="card-body px-5 pt-5 d-flex flex-column align-items-between">
                    <div>
                        <div class="h3 text-secondary font-weight-300">Karyawan</div>
                        <p class="text-muted mb-4">Lakukan login sebagai karyawan</p>
                    </div>
                    <div class="icons-org-join align-items-center mx-auto">
                        <i class="icon-user" data-feather="user"></i>
                        <i class="icon-arrow fas fa-long-arrow-alt-right"></i>
                        <i class="icon-users" data-feather="users"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent px-5 py-4">
                    <div class="small text-center"><a class="btn btn-block btn-secondary" href="<?= base_url('auth/user') ?>">Karyawan</a></div>
                </div>