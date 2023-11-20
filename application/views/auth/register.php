<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">

                                    <div class="form-group">
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>"
                                            class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email"
                                placeholder="name@example.com" />
                            <label for="email">Email address</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="password" id="password" type="password"
                                        placeholder="Create a password" />
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="passwordconfirm" id="passwordconfirm"
                                        type="password" placeholder="Confirm password" />
                                    <label for="passwordconfirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><a class="btn btn-primary btn-block"
                                    href="<?= base_url('Auth'); ?>">Create Account</a></div>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="<?= base_url('Auth'); ?>">Have an account? Go to login</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</main>
</div>
<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>