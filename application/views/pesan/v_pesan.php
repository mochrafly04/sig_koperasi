<div class="panel panel-default">
    <div class="panel-heading">
        Kotak Masuk
    </div>
</div>

<div class="row">
    <div class="col-sm-10">
            <div class="panel panel-success">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <?php $id = 1;
                        foreach ($pesan as $p) : ?>
                                <tr>
                                    
                                    <th><?= $p->nama_ppkl ?></th>
                                    <th><?= $p->keterangan ?></th>
                                    <td>
                                    <a href="<?= base_url('pesan/detail/' .$p->id) ?>" class="btn btn-warning btn-sm">Detail</a>
                                    <a href="<?= base_url('pesan/hapus/' .$p->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i></a>
                                    </td>  
                                </tr>
                        <?php endforeach; ?>
                            </thead>
                        </table>
                    </div>
                </div>
    </div>