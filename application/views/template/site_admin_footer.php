      </div>
      <!-- id content end -->
  </div>
  <!-- content wrapper end -->
</div>
<!-- wrapper end -->


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


  
</div>

  
    
</body>
</html>