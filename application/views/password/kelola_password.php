<div class="row">
    <div class="col-sm-5">
            <div class="panel panel-success">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <?php $id_user = 1;
                        foreach ($user as $u) : ?>
                                <tr>
                                    <th>Data User</th>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <th><?= $u->nama ?></th> 
                                </tr>
                                <tr>
                                    <th>Usernamae</th>
                                    <th>:</th>
                                    <th><?= $u->username ?></th>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <th>:</th>
                                    <th><?= $u->password ?></th>
                                </tr>
                                <?php endforeach; ?>
                            </thead>
                        </table>
                        <br>
                    </div>
                </div>
                <a href="<?= base_url('password/ubah/' .$u->id_user) ?>" class="btn btn-warning btn-sm">Edit User</a>
        
        
