<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <?php
                                    echo $data;
                                    ?>
                                    <?= validation_errors() ?>
                                    <form class="user" action="<?= base_url('auth') ?>" method="POST">
                                        <div class="form-group mb-4">
                                            <select name="departemen" class="form-control">
                                                <option value="">--PILIH DEPARTEMEN--</option>
                                                <?php foreach ($departemen as $dep) { ?>
                                                    <option value="<?= $dep->id; ?>">
                                                        <?= $dep->nama_dep; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>