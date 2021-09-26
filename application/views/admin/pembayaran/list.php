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
            <?php $this->load->view('admin/_partials/breadcrumb') ?>

           <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="<?php echo site_url('admin/siswa/add') ?>" class="btn btn-rounded btn-primary">
                            <i class="fas fa-plus"></i> Tambah</a>

                             <a href="<?php echo site_url('admin/siswa/cetak') ?>" class="btn btn-rounded btn-light">
                             <i class="icon-printer"></i> cetak</a>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Siswa</h4>
                                <h6 class="card-subtitle">Aplikasi Pembayaran SPP</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>NISN</th>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Opsi</th>                                               
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <?php if ($siswa): ?> 
                                            <?php foreach ($siswa as $row): ?>
                                            
                                            <tr>
                                                <td><?php echo $row->nisn ?></td>
                                                <td><?php echo $row->nis ?></td>
                                                <td><?php echo $row->nama ?></td>
                                                <td>(<?php echo $row->nama_kelas ?>) <?php echo $row->kompetensi_keahlian ?></td>
                                                <td align="center">

                                            <a class="btn btn-sm btn-rounded btn-warning" title="Pembayaran" href="<?php echo site_url('admin/pembayaran/spp/'.$row->nisn) ?>" title="info"><i style="color: #ffff;" class="icon-wallet"></i></a>
                                        </td>
                                            </tr>
                                            <?php endforeach; ?>

                                             <?php else : ?>
                                             <tr>
                                                <td align="center" colspan="6">
                                                    <p>Tidak ada data Siswa...</p>
                                                </td>
                                            </tr>
                                             <?php endif; ?>

                                            </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>NISN</th>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
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
    <?php $this->load->view('admin/_partials/modal') ?>

    <?php $this->load->view('admin/_partials/js') ?>
</body>

</html>
