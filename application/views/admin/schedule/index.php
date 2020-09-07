

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
<div class="container-fluid">
          <div class="row">

            <!-- Page Heading -->
            <h1 class="col-12 h3 mb-2 text-gray-800">Meeting Schedules</h1>

            <div class="col-12 col-md-4 col-sm-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cases</h6>
                </div>
                <div class="card-body">
                  <div><a href="<?php echo base_url() ?>admin/schedule/index/name/waiting/status" class="small font-weight-bold">Meeting</a></div>  
                  <div><a href="<?php echo base_url() ?>admin/schedule/index/name/done/status" class="small font-weight-bold">Done</a></div>  
                </div>
              </div>
            </div>
         

            <!-- DataTales Example -->
            <div class="col-md-8 col-sm-8 col-12 card shadow mb-4">
              <div class="p-3 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pending Analysis</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Meeting date</th>
                      <th>Sentiment text</th>
                      <th>Mark</th>
                      <th>Action</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php  if ( isset( $schedules ) && count($schedules) >= 1 ):?> 
                      <?php foreach($schedules as $schedule): ?>
                       <tr>
                        <td><?php echo $schedule['meet_id']; ?></td>
                        <td><?php echo ucfirst($schedule['user_fname']) .' '.ucfirst($schedule['user_mname']).'. '. ucfirst($schedule['user_lname']); ?></td>
                          <?php if( date("Y-m-d") > date("Y-m-d",strtotime($schedule['meet_date'])) && $schedule['meet_case'] == 'waiting' ): ?>
                            <td><span class="text-danger"><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?> </span></td>
                             <?php elseif(date("Y-m-d") == date("Y-m-d",strtotime($schedule['meet_date'])) && $schedule['meet_case'] == 'waiting' ): ?>
                            <td><span class="text-warning"><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?> </span></td>
                            <?php elseif($schedule['meet_case'] == 'done'): ?>
                            <td><span class="text-success"><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?> </span></td>
                          <?php else: ?>
                            <td><span class="text-info"><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?> </span></td>

                          <?php endif; ?>

                         <!-- <td><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?></td>  -->


                        <td><p><?php echo $schedule['case_text']; ?></p></td>
                        <td>
                          <?php  if($schedule['meet_mark'] == 'plan'): ?>
                            <span class="text-warning">Under Intervention Plan</span>
                             <?php elseif($schedule['meet_mark'] == 'follow'): ?>
                            <span class="text-success">Follow up check-up</span>
                             <?php else: ?>
                          <?php endif; ?>
                          

                        </td>

                          <?php if( $schedule['meet_case'] == 'waiting'): ?>
                          <td><a  href="<?php echo base_url() ?>admin/schedule/ongoing/<?php echo $schedule['meet_id']  ?>" class="btn btn-block btn-outline-info">Meeting</a></td>
                          <td><a  href="<?php echo base_url() ?>admin/schedule/resched/<?php echo $schedule['meet_id']  ?>" class="btn btn-block btn-outline-warning">Reschedule</a></td>
                          <td><a  href="" class="btn btn-block btn-outline-danger">Delete</a></td>
                          <?php endif; ?>
                          <!-- /. waiting -->
                          <?php if( $schedule['meet_case'] == 'done'): ?>
                         <!--  <td><a  href="<?php echo base_url() ?>admin/schedule/ongoing/<?php echo $schedule['meet_id']  ?>" class="btn btn-block btn-outline-info">Proceed to meeting</a></td>
                          <td><a  href="" class="btn btn-block btn-outline-warning">Reschedule</a></td>
                          <td><a  href="" class="btn btn-block btn-outline-danger">Delete</a></td> -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          <?php endif; ?>
                          <!-- /. done -->

                       </tr>

                      <?php endforeach; ?>

                    <?php else: ?>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>no data</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>

                    </tr>

                   <?php endif; ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 


        </div>
        <!-- /.container-fluid -->

