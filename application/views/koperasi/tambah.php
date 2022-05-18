<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="badan_hukum">Nomor Badan Hukum</label>
                        <input type="text" name="badan_hukum" class="form-control" id="badan_hukum">
                        <small class="form-text text-danger"><?= form_error('badan_hukum'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_koperasi">Nama Koperasi</label>
                        <input type="text" name="nama_koperasi" class="form-control" id="nama_koperasi">
                        <small class="form-text text-danger"><?= form_error('nama_koperasi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_koperasi">Jenis Koperasi</label>
                        <select class="form-control" id="jenis_koperasi" name="jenis_koperasi">
                        <option value="Kop Pensiunan Abri">Kop Pensiunan Abri</option>
                        <option value="Kop Konsumen">Kop Konsumen</option>
                        <option value="Kop Peternakan">Kop Peternakan</option>
                        <option value="Kop Pasar">Kop Pasar</option>
                        <option value="Kop Serba Usaha">Kop Serba Usaha</option>
                        <option value="Kop Pesantren">Kop Pesantren</option>
                        <option value="KPRI">KPRI</option>
                        <option value="Kop Karyawan">Kop Karyawan</option>
                        <option value="Kop Wanita">Kop Wanita</option>
                        <option value="Kop Gapoktan">Kop Gapoktan</option>
                        <option value="Kop Peternakan">Kop Peternakan</option>
                        <option value="Kop Lainnya">Kop Lainnya</option>
                        <option value="Kop Simpan Pinjam">Kop Simpan Pinjam</option>
                        <option value="Kop Mandiri Pangan">Kop Mandiri Pangan</option>
                        <option value="Kop Perikanan">Kop Perikanan</option>
                        <option value="KUD MINA">KUD MINA</option>
                        <option value="Kop Produsen">Kop Produsen</option>
                        <option value="Kop Warga">Kop Warga</option>
                        <option value="Kop Pasar">Kop Pasar</option>
                        <option value="Kop Jasa">Kop Jasa</option>
                        <option value="KOPINKRA">KOPINKRA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_koperasi">Status Koperasi</label>
                        <select class="form-control" id="status_koperasi" name="status_koperasi">
                        <option value="Kop Pensiunan Abri">Aktif</option>
                        <option value="Kop Konsumen">Perlu Pembinaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desa">Desa</label>
                        <input type="text" name="desa" class="form-control" id="desa">
                        <small class="form-text text-danger"><?= form_error('desa'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="kecamatan">
                        <small class="form-text text-danger"><?= form_error('kecamatan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="la">La</label>
                        <input type="text" name="la" class="form-control" id="la">
                        <small class="form-text text-danger"><?= form_error('la'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="lt">lt</label>
                        <input type="text" name="lt" class="form-control" id="lt">
                        <small class="form-text text-danger"><?= form_error('lt'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                        <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-success float-right">Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger float-right">Reset</button>
                </form>
                </div>
            </div>

            
        </div>
    </div>

</div>