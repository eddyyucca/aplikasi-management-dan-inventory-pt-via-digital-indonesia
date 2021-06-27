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