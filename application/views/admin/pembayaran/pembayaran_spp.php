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
                               <a href="<?php echo site_url('admin/pembayaran') ?>" class="btn btn-rounded btn-outline-primary"><i class="fas fa-arrow-left"></i> kembali</a>

                                <a href="<?php echo site_url('admin/pembayaran/cetak') ?>" class="btn btn-rounded btn-light">
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
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">NISN</th>
                                                <td><b>:</b> &nbsp <?php echo $siswa->nisn ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIS</th>
                                                <td><b>:</b> &nbsp <?php echo $siswa->nis ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama</th>
                                                <td><b>:</b> &nbsp <?php echo $siswa->nama ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kelas</th>
                                                <td><b>:</b> &nbsp (<?php echo $siswa->nama_kelas ?>) <?php echo $siswa->kompetensi_keahlian ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No Telp</th>
                                                <td><b>:</b> &nbsp <?php echo $siswa->no_telp ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alamat</th>
                                                <td><b>:</b> &nbsp <?php echo $siswa->alamat ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bayar SPP</h4>
                                <h6 class="card-subtitle">Pembayaran SPP /bulan</h6>
                                <form action="#">
                                    <div class="form-body">

                                        <div class="row">

                                          <div class="col-md-6">
                                            <select name="id_kelas" class="custom-select mr-sm-2 <?php echo form_error('id_kelas') ? 'is-invalid':'' ?>" id="inlineFormCustomSelect">
                                            <option selected value="" >Pilih Bulan...</option>
                                         <?php foreach ($kelas as $kls): ?>
                                            <option value="<?php echo $kls->id_kelas ?>"> (<?php echo $kls->nama_kelas ?>) <?php echo $kls->kompetensi_keahlian ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>

                                            <div class="col-md-6">
                                                <select name="id_kelas" class="custom-select mr-sm-2 <?php echo form_error('id_kelas') ? 'is-invalid':'' ?>" id="inlineFormCustomSelect">
                                            <option selected value="" >Pilih Bulan...</option>
                                         <?php foreach ($kelas as $kls): ?>
                                            <option value="<?php echo $kls->id_kelas ?>"> (<?php echo $kls->nama_kelas ?>) <?php echo $kls->kompetensi_keahlian ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Bayar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pembayaran SPP</h4>
                                 <h5 class="card-subtitle">NISN : <?php echo $siswa->nisn ?></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Tgl Bayar</th>
                                                <th>Bulan Dibayar</th>
                                                <th>Tahun Dibayar</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Status</th>                                               
                                            </tr>
                                        </thead>
                                            <tbody>

                                            <?php if ($pembayaran): ?> 
                                            <?php foreach ($pembayaran as $row): ?>
                                            
                                            <tr>
                                                <td><?php echo $row->tgl_bayar ?></td>
                                                <td><?php echo $row->nama_bulan ?></td>
                                                <td><?php echo $row->tahun ?></td>
                                                <td>Rp.<?php echo number_format($row->nominal,0,",",".") ?></td>
                                                 <td><?php echo $row->status ?></td>
                                            </tr>
                                            <?php endforeach; ?>

                                             <?php else : ?>
                                             <tr>
                                                <td align="center" colspan="5">
                                                    <p>Tidak ada data Pembayaran...</p>
                                                </td>
                                            </tr>
                                             <?php endif; ?>

                                            </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Tgl Bayar</th>
                                                <th>Bulan Dibayar</th>
                                                <th>Tahun Dibayar</th>
                                                <th>Jumlah Bayar</th>
                                                 <th>Status</th>
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
