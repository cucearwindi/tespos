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

        $('.default-ordering2').DataTable( {
            // "order": [[ 0, "asc" ]]
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel'
            ]
        } );

        // $(document).ready(function() {
        //     $('#print').DataTable( {
        //         dom: 'Bfrtip',
        //         buttons: [
        //             'excel', 'pdf', 'print'
        //         ]
        //     } );
        // } );
        // $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

      });

      /* swal confirmation */
      function confirm_create_wo() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Create WO!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_create_wo').submit();
          }
        });
      }

      function confirm_submit() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Submit!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_submit').submit();
          }
        });
      }

      function confirm_approve() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Approve!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_approve').submit();
          }
        });
      }

      function confirm_split_wo() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Split WO!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_split_wo').submit();
          }
        });
      }

      function confirm_join_wo() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Join WO!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_join_wo').submit();
          }
        });
      }

      function confirm_drop_wo() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Drop WO!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_drop_wo').submit();
          }
        });
      }
      /* swal confirmation */

      /* pickup notification */
      // untuk survey
      $('#btn-submit-1').on('click',function(e){ 
        e.preventDefault();
        Swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, pickup it!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#pickup_form1').submit();
          }
        })
      });

      // untuk apd
      $('#btn-submit-2').on('click',function(e){ 
        e.preventDefault();
        Swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, pickup it!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#pickup_form2').submit();
          }
        })
      });

      // untuk abd
      $('#btn-submit-3').on('click',function(e){ 
        e.preventDefault();
        Swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, pickup it!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#pickup_form3').submit();
          }
        })
      });
      /* pickup notification */


      // novalidate search pickup
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-search');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      // novalidate create wo
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-create-wo');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_create_wo();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      // novalidate split
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-split-wo');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_split_wo();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      // novalidate join
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-join-wo');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_join_wo();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      // novalidate drop
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-drop-wo');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_drop_wo();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      /* survey attributes */
      function lme_required_condition(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/attr_survey_lme_required',
           data : 'lme_required='+$("#lme_required").val(),
           success: function(data)
           {
             $("#lme_required_result").html(data);
           }
        });
      };
      function new_lme_condition(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/attr_survey_new_lme',
           data : 'new_lme='+$("#new_lme").val(),
           success: function(data)
           {
              $("#new_lme_result").html(data);
           }
        });
      };
      $("#lme_required").change(function(){
        lme_required_condition();
      });
      $("#new_lme").change(function(){
        new_lme_condition();
      });
      /* .survey attributes */ 

      /* location */ 
      function get_location_group(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/get_location_group',
           data : 'loc_region_telkom_id='+$("#loc_region_id").val(),
           success: function(data)
           {
             $("#loc_group_id").html(data);
           }
        });
      };
      function get_location(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/get_location',
           data : 'loc_group_id='+$("#loc_group_id").val(),
           success: function(data)
           {
              $("#loc_id").html(data);
           }
        });
      };
      $("#loc_region_id").change(function(){
        get_location_group();
      });
      $("#loc_group_id").change(function(){
        get_location();
      });
      /* .location */

      /* sub system */ 
      function get_sub_system(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/get_sub_system',
           data : 'system_id='+$("#system_id").val(),
           success: function(data)
           {
             $("#sub_system_id").html(data);
           }
        });
      };
      $("#system_id").change(function(){
        get_sub_system();
      });
      /* .sub system */ 

      /* sub system */ 
      function get_sub_program(){
        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/get_sub_program',
           data : 'program_id='+$("#program_id").val(),
           success: function(data)
           {
             $("#sub_program_id").html(data);
           }
        });
      };
      $("#program_id").change(function(){
        get_sub_program();
      });
      /* .sub system */ 

      /* consview */
      function get_odp_consview(sw_id){
        var smallworld_id = sw_id.value;
        var wo_id         = $("#wo_id").val();
        var wo_detail_id  = $("#wo_detail_id").val();

        $.ajax({
           type : 'POST',
           url  : '<?php echo base_url(); ?>index.php/public_controller/get_odp_consview',
           data : 'sw_id='+smallworld_id+'&wo_id='+wo_id+'&wo_detail_id='+wo_detail_id,
           success: function(data)
           {
              //alert(wo_id);
              $("#odp_consview").html(data);
           }
        });
      };
      /*$("#program_id").change(function(){
        get_sub_program();
      });*/
      /* .consview */







      // novalidate insert uim uimax
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-insert-uim-uimax');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_insert_uim_uimax();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      //konfirmasi insert uim uimax
      function confirm_insert_uim_uimax() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Insert Ondesk UIM vs UIMax!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_insert_uim_uimax').submit();
          }
        });
      }

      // novalidate edit uim uimax
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-edit-uim-uimax');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_edit_uim_uimax();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      //konfirmasi edit uim uimax
      function confirm_edit_uim_uimax() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update Ondesk UIM vs UIMax!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_edit_uim_uimax').submit();
          }
        });
      }

      // novalidate insert survey
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-insert-survey');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_insert_survey();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      //konfirmasi insert survey
      function confirm_insert_survey() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Insert Survey!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_insert_survey').submit();
          }
        });
      }

      // novalidate edit survey
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-edit-survey');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_edit_survey();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })(); 

      //konfirmasi edit survey
      function confirm_edit_survey() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update Survey!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_edit_survey').submit();
          }
        });
      }

      // novalidate insert survey uimax
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-insert-survey-uimax');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_insert_survey_uimax();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      //konfirmasi insert survey uimax
      function confirm_insert_survey_uimax() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Insert Pelurusan Survey vs UIMax!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_insert_survey_uimax').submit();
          }
        });
      }

      // novalidate edit survey uimax
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation-edit-survey-uimax');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                confirm_edit_survey_uimax();
              }
              form.classList.add('was-validated');
            }, false);
          });
      }, false);
      })();

      //konfirmasi edit survey uimax
      function confirm_edit_survey_uimax() {
        event.preventDefault();
        swal({
          title: 'Are you sure?',
          //text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update Pelurusan Survey vs UIMax!',
          closeOnConfirm: false,
          closeOnCancel: false
        }).then((result) => {
          if (result.value) {
            $('#form_edit_survey_uimax').submit();
          }
        });
      }

      
    </script>

   