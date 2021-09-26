<!DOCTYPE html>
<html dir="ltr">

<?php $this->load->view('admin/_partials/head') ?>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url('assets/template/back/src') ?>/assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                     
                    <div class="p-3">
                        <?php echo $this->session->flashdata('message');  ?>
                        
                        <img src="<?php echo base_url('assets/template/back/src') ?>/assets/images/spp_logo_kecil.png" alt="SPP">
                        <h2 class="mt-3 text-center">Registrasi Petugas</h2>
                        <form action="<?php echo site_url('admin/registrasi/petugas'); ?>" method="post" class="mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Nama Petugas" id="username" name="username" value="<?php echo set_value('username'); ?>">
                                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Kata Sandi" id="password1" name="password1">
                                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Ulang Kata Sandi" id="password2" name="password2">
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Registrasi</button>
                                     <hr>
                                     <h6><a href="<?php echo site_url('admin/beranda') ?>">Kembali</a></h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
  <?php $this->load->view('admin/_partials/js') ?>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>