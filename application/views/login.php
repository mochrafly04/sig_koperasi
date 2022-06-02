<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> SISTEM INFORMASI GEOGRAFIS KOPERASI <br>
                KAB.SUBANG</h2>
                 <br />
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                        <strong>  Login  </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="<?= base_url() ?>login/proses_login" method="POST">
                                <?php echo $this->session->flashdata('pesan'); ?>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" id="password" class="form-control"  placeholder="Password" required="required" name="password">
                                        </div>
                                     <br>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <br>
                                        <a href="fhome">Back to home</a>
                                    <hr />
                                </form>
                            </div>
                           
                        </div>
                    </div>
        </div>
    </div>