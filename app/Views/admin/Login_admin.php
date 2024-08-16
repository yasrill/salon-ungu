<?php $this->extend('/layout/templateLoginAdmin') ?>

<?php $this->section('content') ?>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="margin-top: 180px">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">LOGIN ADMIN</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('Admin/Login_admin/aksi_login'); ?>" enctype="multipart/form-data">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Masukkan Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Masukkan Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-1">
                                              <button type="submit" value="login" class="btn btn-primary" >Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo base_url('admin/Register_admin')?>">Gak Punya akun??? Daftar disini!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

<?php $this->endSection()?>
        