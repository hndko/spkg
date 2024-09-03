<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= ucfirst('login') ?> | Sistem Penilaian Kinerja Guru</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/templates/images/favicon.png" />
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.7.0/sweetalert2.css" integrity="sha512-qWufF7Q/gWXkGNDLvqEBFmg2ZfZGtPK5i4syfx7eazH4cUO7FVRnwHzmdgKfJyyXn4koxBCXknEwIIgyE0GZPA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.7.0/sweetalert2.js" integrity="sha512-EY+sOlhMaflzdMPOJAw2CazW4nADfI5B+tFFnfiqQj/4Zjz+S2uWzmx9963PqnCFYFc4qo6ev4pcULlnUdAA0g==" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo h2 font-weight-bold">
                                <!-- <img src="<?= base_url() ?>assets/templates/images/logo-dark.svg" alt="logo"> -->
                                Sistem Penilaian Kinerja Guru
                            </div>
                            <h4>Selamat Datang!</h4>
                            <h6 class="font-weight-light">Login untuk mengakses Aplikasi Penilaian!</h6>
                            <form class="pt-3" action="<?= site_url('auth/proses') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input class="form-control form-control-lg border-left-0" type="text" name="username" value="<?= @$this->session->flashdata('Username') ?>" placeholder="Enter your username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input class="form-control form-control-lg border-left-0" type="password" name="password" value="<?= @$this->session->flashdata('Password') ?>" placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <button type="submit" name="login" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Login</button>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="<?= site_url() ?>">Halaman Landing ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?= date('Y') ?> All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php $this->view('messages') ?>
    <!-- base:js -->
    <script src="<?= base_url() ?>assets/templates/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>assets/templates/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>assets/templates/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>assets/templates/js/template.js"></script>
    <!-- endinject -->
</body>

</html>