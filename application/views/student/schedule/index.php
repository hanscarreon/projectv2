

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

	          <!-- Page Heading -->
	          <h1 class="col-12 h3 mb-2 text-gray-800">Meetings</h1>

	          <!-- DataTales Example -->
	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Meeting info</h6>
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                        <th>Case-ID No.</th>
	                        <th>Name</th>
	                        <th>Meeting date</th>
	                        <th>Result</th>
	                        <th>Meeting Link</th>
	                        <th>Sentiment</th>
	                        <th>Action</th>
	                        <th></th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                     <?php  if ( isset( $schedules ) && count($schedules) >= 1 ):?>
	                      <?php $x=1; foreach($schedules as $schedule): ?>
	                      <tr>
	                      <td><?php echo $schedule['meet_id'] ?></td>
	                        <td><?php echo ucfirst($schedule['user_fname']); ?> <?php echo ucfirst($schedule['user_mname']); ?> <?php echo ucfirst($schedule['user_lname']); ?></td>
	                        <td><?php echo date("F j, Y, g:i a",strtotime($schedule['meet_date'])) ?></td>
	                        <td>
	                            <?php  
	                            if ($schedule["case_study"] == 'positive') 
	                              { 
	                                echo '<span class="tag text-success">'.$schedule["case_study"].'</span>';
	                             }
	                              if ($schedule["case_study"] == 'neutral') 
	                              { 
	                                echo '<span class="tag text-warning">'.$schedule["case_study"].'</span>';
	                             }
	                              if ($schedule["case_study"] == 'negative') 
	                              { 
	                                echo '<span class="tag text-danger">'.$schedule["case_study"].'</span>';
	                             }
	                          ?>
	                          </span>
	                        </td>
	                        <td><?php  echo  !empty($schedule['meet_link'])? $schedule['meet_link']: 'No Meeting link' ?>

	                        </td>
	                        <td>
	                          <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $schedule["case_text"]; ?></p>
	                        </td>

	                        <td><a  href="<?php echo base_url()?>student/schedule/view/<?php echo $schedule['meet_id'] ?>" class="btn btn-block btn-outline-info">View</a></td>
	                        <td></td>
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
	                    </tr>

	                  <?php endif;?>
	              	  </tbody>
	                </table>
	              </div>
	            </div>
	          </div>
	        </div> 


        </div>
        <!-- /.container-fluid -->

