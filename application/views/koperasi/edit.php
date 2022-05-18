<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_koperasi" value="<?= $data_koperasi['id_koperasi']; ?>">
                    <div class="form-group">
                        <label for="nama_koperasi">Nama Koperasi</label>
                        <input type="text" name="nama_koperasi" class="form-control" id="nama_koperasi" value="<?= $data_koperasi['nama_koperasi']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_koperasi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_koperasi">Jenis Koperasi</label>
                        <select class="form-control" id="jenis_koperasi" name="jenis_koperasi">
                        <?php foreach($jenis_koperasi as $jk) : ?>
                        <?php if($jk == $data_koperasi['jenis_koperasi']) : ?>
                            <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                        <?php else : ?>
                            <option value="<?= $jk; ?>"><?= $jk; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_koperasi">Status Koperasi</label>
                        <select class="form-control" id="status_koperasi" name="status_koperasi">
                        <?php foreach($status_koperasi as $sk) : ?>
                        <?php if($sk == $data_koperasi['status_koperasi']) : ?>
                            <option value="<?= $sk; ?>" selected><?= $sk; ?></option>
                        <?php else : ?>
                            <option value="<?= $sk; ?>"><?= $sk; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desa">Desa</label>
                        <input type="text" name="desa" class="form-control" id="desa" value="<?= $data_koperasi['desa']; ?>">
                        <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $data_koperasi['kecamatan']; ?>">
                        <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="la">La</label>
                        <input type="text" name="la" class="form-control" id="la" value="<?= $data_koperasi['la']; ?>">
                        <small class="form-text text-danger"><?= form_error('la'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="lt">Lt</label>
                        <input type="text" name="lt" class="form-control" id="lt" value="<?= $data_koperasi['lt']; ?>">
                        <small class="form-text text-danger"><?= form_error('lt'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $data_koperasi['keterangan']; ?>">
                        <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-success float-right">Simpan</button>
                    </form>
                </div>
            </div>

            
        </div>
    </div>

</div>