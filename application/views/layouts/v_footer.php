    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019 &copy; Copyright PT Majoo Teknologi Indonesia</span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          
         <!--  <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> <font color="white">More themes</font></a></li>
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> <font color="white">More themes</font></a></li>
          <li class="list-inline-item"><a class="my-1" href="#" target="_blank"> <font color="white">More themes</font></a></li> -->
          
        </ul>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/app-assets/js/scripts/ui/compact-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
    <!--
    <script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/charts/chartjs/bar/column-stacked.js" type="text/javascript"></script>
    <script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
    <script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
    <script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/tables/datatables/datatable-advanced.js" type="text/javascript"></script>
    -->
    
    <!--<script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>-->
    <!--<script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>-->
    <!--<script src="<?php// echo base_url(); ?>assets/app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

    <script>
      $(document).ready(function() {
    
        // notification action
        <?php echo $notif_message; ?>

        // datatables
        $('.default-ordering').DataTable( {
            "order": [[ 0, "asc" ]]
            /*dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]*/
        } );

      });
      
    </script>

   