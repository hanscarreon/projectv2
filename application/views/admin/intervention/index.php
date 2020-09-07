

<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable( {
      pagingType: "full_numbers",
        dom: 'Bfrtip',
      processing: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );
</script>

<!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-4 col-sm-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cases</h6>
                </div>
                <div class="card-body">
                  <div><a href="<?php echo base_url() ?>admin/sentiment/index/name/closed/" class="small font-weight-bold">Closed Case</a></div>  
                  <div><a href="<?php echo base_url() ?>admin/sentiment/index/name/recommended/" class="small font-weight-bold">Recommended to SDO/Psychiatrist</a></div>  
                  <div><a href="<?php echo base_url() ?>/admin/intervention/index/name/ongoing" class="small font-weight-bold">Intervention Plan</a></div>  
                </div>
              </div>
            </div>


            <div class="col-12 col-md-8 col-sm-12 mb-8 card shadow mb-4">
                <div class="p-3 py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date Created</th>
                            <th>Meeting note</th>
                            <th>Plan Module</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php  if ( isset( $plans ) && count($plans) >= 1 ):?>
                          <?php foreach($plans as $plan): ?>
                          <tr>
                            <td><?php echo $plan['plan_id']; ?></td>
                            <td><?php echo ucfirst($plan['user_fname']); ?> <?php echo ucfirst($plan['user_mname']); ?> <?php echo ucfirst($plan['user_lname']); ?></td>
                            <td><?php echo date("F j, Y, g:i a",strtotime($plan['plan_created'])) ?></td>
                            <td>
                              <?php echo $plan['meet_note'] ?>
                            </td>
                            <td>
                              <?php if(empty($plan['plan_file']) || $plan['plan_file']== null): ?>
                               No file available
                              <?php else: ?>
                              <a href="<?php echo base_url().$plan['plan_file'] ?>" download="" > Download Module </a>
                              <?php endif; ?>
                            </td>
                            <td><a  href="<?php echo base_url()?>admin/intervention/view/<?php echo $plan['plan_id']?>" class="btn btn-block btn-outline-primary">Upload/View Info</a></td>
                          </tr> 
                          <?php endforeach; ?>
                        
                       <?php else: ?>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>no data</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>

                      <?php endif;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

          </div>
        </div>

