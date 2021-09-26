<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('admin/_partials/head') ?>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php $this->load->view('admin/_partials/header') ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php $this->load->view('admin/_partials/aside') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <?php $this->load->view('admin/_partials/popup_notif') ?>

          <?php $this->load->view('admin/_partials/breadcrumb') ?>

           <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                           <a href="<?php echo site_url('admin/spp') ?>" class="btn btn-rounded btn-outline-primary"><i class="fas fa-arrow-left"></i> kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <form action="<?php base_url('admin/spp/edit') ?>" method="post" enctype="multipart/form-data">
                <div class="row">

                    <input type="hidden" name="id" value="<?php echo $spp->id_spp?>" />

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tahun</h4>
                                <div class="mt-4">
                                    <div class="form-group">
                                         <input type="text" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>" id="placeholder"
                                            placeholder="Masukan tahun" name="tahun" value="<?php echo $spp->tahun ?>">
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('tahun') ?>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nominal</h4>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control <?php echo form_error('nominal') ? 'is-invalid':'' ?>" id="placeholder"
                                            placeholder="Masukan nominal" name="nominal" value="<?php echo $spp->nominal ?>"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                <input class="btn btn-block btn-primary" type="submit" name="btn" value="Simpan" />
        </form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <?php $this->load->view('admin/_partials/footer') ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>
