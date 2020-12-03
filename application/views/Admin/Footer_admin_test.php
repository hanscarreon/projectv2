

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      

<!-- Footer -->
<footer class="sticky-footer bg-white" style="border:none!important">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span class="color-dark" style="color: black!important">Copyright &copy; GMSUSA WEB/APP 2020</span>
    </div>
  </div>
</footer>
    <!-- End of Footer -->
  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url() ?>login/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  <!-- <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://code.jquery.com/jquery.js"></script>
   <script src="<?php echo base_url() ?>v2/bootstrap/js/bootstrap.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>js/sb-admin-2.min.js"></script>

  <!-- Toastr -->
  <script src="<?php echo base_url() ?>plugins/toastr/toastr.min.js"></script>
    <!-- jquery-validation -->
  <script src="<?php echo base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>


  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
  <!-- chart js -->
<!-- Page level plugins -->
<script src="<?php echo base_url() ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url() ?>js/demo/chart-area-demo.js"></script> -->
<script src="<?php echo base_url() ?>js/demo/chart-pie-demo.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    var titleReport;
    $('#dataTable').DataTable( {
    	pagingType: "full_numbers",
        dom: 'Bfrtip',
    	processing: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );


    $('#dashboardTable').DataTable( {
    	pagingType: "full_numbers",
        dom: 'Bfrtip',
    	processing: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ],
      order: [[ 3, "desc" ]]
    } );
    
} );

function getFilter(){
  $('.filterData').change(function(){
    var value =  $(this).val();
    console.log()
     return value;
  })

}
</script>
<!-- 
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script> -->

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>v2/vendors/fullcalendar/fullcalendar.js"></script>
    <script src="<?php echo base_url() ?>v2/vendors/fullcalendar/gcal.js"></script>




  <?php if ( isset( $msg_error ) ): ?>
  <div id="dom-target" style="display: none;">  
    <?php
      echo "<pre>";
      print_r ($msg_error);
      echo "</pre>";
    ?>
  </div>  
<?php endif;?>
<script>
  var msg_success = "<?php echo $this->session->flashdata('msg_success') ?>";
  if ( msg_success != "" ) {
    toastr.success('Success!', msg_success );
  }

  var msg_error = "<?php echo $this->session->flashdata('msg_error') ?>";
  if ( msg_error != "" ) {
    toastr.error('Error!', msg_error );
  }

  var div = document.getElementById("dom-target");
  var msg_error = div.textContent;
  if ( msg_error != "" || msg_error == 'false') {
    toastr.error('Error!', msg_error );
  }
</script>


</body>

</html>
