

<script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/feather.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="<?php echo base_url('assets/template/back/src') ?>/assets/extra-libs/sparkline/sparkline.js"></script>

    <!-- Toast Alert -->
    <script src="<?php echo base_url('assets/template/back/toastr') ?>/toastr.min.js"></script>


    <script>
        function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
            }
    </script>

    <script type="text/javascript">
  
      const flashData = $('.flash-data').data('flashdata');

      if(flashData){
    
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }

        toastr["success"]('Data Berhasil ' +  flashData)
  }

</script>
