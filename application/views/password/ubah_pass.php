<div class="row">
    <div class="col-sm-6">
        <div class="card-body">

            <form action="" method="post">
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?= $user['username']; ?>">
                <small class="form-text text-danger"><?= form_error('username'); ?></small>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" class="form-control" id="password" value="<?= $user['password']; ?>">
                <small class="form-text text-danger"><?= form_error('password'); ?></small>
            </div>
            <button type="submit" name="ubah" class="btn btn-success float-right">Simpan</button>
            </form>
        </div>
    </div>
</div>