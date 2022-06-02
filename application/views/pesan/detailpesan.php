<div class="panel panel-default">
    <div class="panel-heading">
        Detail Pesan
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
            <div class="panel panel-success">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Isi Pesan</th>
                                </tr>
                                <tr>
                                    <th>Nama Pengirim</th>
                                    <th>:</th>
                                    <th><?= $pesan['nama_ppkl'] ?></th> 
                                </tr>
                                <tr>
                                    <th>Nama Koperasi</th>
                                    <th>:</th>
                                    <th><?= $pesan['nama_koperasi'] ?></th>
                                </tr>
                                <tr>
                                    <th>Jenis Koperasi</th>
                                    <th>:</th>
                                    <th><?= $pesan['jenis_koperasi'] ?></th>
                                </tr>
                                <tr>
                                    <th>Status Koperasi</th>
                                    <th>:</th>
                                    <th><?= $pesan['status_koperasi'] ?></th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>:</th>
                                    <th><?= $pesan['desa'] ?></th>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <th>:</th>
                                    <th><?= $pesan['kecamatan'] ?></th>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>:</th>
                                    <th><?= $pesan['keterangan'] ?></th>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <a href="<?= base_url('pesan') ?>" class="btn btn-warning btn-sm">Kembali</a>
                    </div>
                </div>
    </div>