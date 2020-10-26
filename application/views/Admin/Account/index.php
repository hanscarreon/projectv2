

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
		"order": [[ 0, "desc" ]],
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );
</script>

<div class="container-fluid">
    <h1 class="col-12 h3 mb-2 text-gray-800">Student List</h1>

  <div class="card card-solid">
    <div class="row">
                  <!-- DataTales Example -->
	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Students</h6>
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Name</th>
	                        <th>Date created</th>
	                        <th>Email</th>
	                        <th>Address</th>
	                        <th>State Level</th>
	                        <th>Year Level</th>
	                        <th>Sex</th>
	                        <th>Action</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                     <?php  if ( isset( $students ) && count($students) >= 1 ):?>
	                      <?php $x=1; foreach($students as $student): ?>
	                      <tr>
	                      <td><?php echo $student['user_id'] ?></td>
	                        <td><?php echo ucfirst($student['user_fname']); ?> <?php echo ucfirst($student['user_mname']); ?> <?php echo ucfirst($student['user_lname']); ?></td>
	                        <td><?php echo date("F j, Y, g:i a",strtotime($student['user_created'])) ?></td>
                          <td><?php echo !empty($student['user_address']) ? $student['user_address'] : 'N/A' ?></td>
	                        <td><?php echo $student['user_email'] ?></td>
	                        <td><?php echo !empty($student['user_pos']) ? $student['user_pos'] : 'N/A' ?></td>
	                        <td><?php echo !empty($student['user_yr']) ? $student['user_yr'] : 'N/A' ?></td>
	                        <td><?php echo !empty($student['user_gender']) ? $student['user_gender'] : 'N/A' ?></td>
	                        <td><a  href="<?php echo base_url('admin/account/view/').$student["user_id"] ?>" class="btn btn-block btn-outline-info">View</a></td>
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
    <!-- /. row -->
  </div>
  <!-- /. card -->
  
</div>
<!-- /.container fluid -->
     