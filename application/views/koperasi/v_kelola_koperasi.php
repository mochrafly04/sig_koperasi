<div class="panel panel-default">
    <div class="panel-heading">
        Tabel Data SIG KOPERASI
    </div>

    <br>

    <?php if ($this->session->flashdata('flash')): ?>
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
             Data <strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('koperasi/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Data </a>
            <a href="" class="pdf-table btn btn-success"><i class="fa fa-print"></i> Print </a>
        </div>
    </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Badan Hukum</th>
                            <th>Nama Koperasi</th>
                            <th>Jenis Koperasi</th>
                            <th>Status Koperasi</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id_koperasi = 1;
                        foreach ($data_koperasi as $dk) : ?>
                        <tr class="odd gradeX">
                            <td><?= $id_koperasi++ ?></td>
                            <td><?= $dk->badan_hukum ?></td>
                            <td><?= $dk->nama_koperasi ?></td>
                            <td><?= $dk->jenis_koperasi ?></td>
                            <td><?= $dk->status_koperasi ?></td>
                            <td><?= $dk->desa ?></td>
                            <td><?= $dk->kecamatan ?></td>
                            <td><?= $dk->latitude ?></td>
                            <td><?= $dk->longitude ?></td>
                            <td><?= $dk->gambar ?></td>
                            <td><?= $dk->keterangan ?></td>
                            <td>
                                <a href="<?= base_url('koperasi/ubah/' .$dk->id_koperasi) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('koperasi/hapus/' .$dk->id_koperasi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                            
        </div>
    </div>