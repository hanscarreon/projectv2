

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


<!-- Begin Page Content -->
        <div class="container-fluid">
        	<div class="row">

	          <!-- Page Heading -->
	          <h1 class="col-12 h3 mb-2 text-gray-800">Dashboard</h1>

	          <!-- DataTales Example -->
	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Pending Analysis</h6>
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                        <th>Case-ID No.</th>
	                        <th>Name</th>
	                        <th>Date created</th>
	                        <th>Negative score</th>
	                        <th>Positive score</th>
	                        <th>Neutral score</th>
	                        <th>Result</th>
	                        <th>Sentiment</th>
	                        <th>Action</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                     <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
	                      <?php $x=1; foreach($sentiments as $sentiment): ?>
	                      <tr>
	                      <td><?php echo $sentiment['case_id'] ?></td>
	                        <td><?php echo ucfirst($sentiment['user_fname']); ?> <?php echo ucfirst($sentiment['user_mname']); ?> <?php echo ucfirst($sentiment['user_lname']); ?></td>
	                        <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
							<td><?php echo !empty($sentiment["case_neg_percent"]) ? $sentiment["case_neg_percent"]  : 'none'  ?></td>
							<td><?php echo !empty($sentiment["case_pos_percent"]) ? $sentiment["case_pos_percent"] :'none' ?></td>
							<td><?php echo !empty($sentiment["case_mid_percent"]) ? $sentiment["case_mid_percent"] : 'none' ?></td>
	                        <td>
	                            <?php  
	                            if ($sentiment["case_study"] == 'positive') 
	                              { 
	                                echo '<span class="tag text-success">'.$sentiment["case_study"].'</span>';
	                             }
	                              if ($sentiment["case_study"] == 'neutral') 
	                              { 
	                                echo '<span class="tag text-warning">'.$sentiment["case_study"].'</span>';
	                             }
	                              if ($sentiment["case_study"] == 'negative') 
	                              { 
	                                echo '<span class="tag text-danger">'.$sentiment["case_study"].'</span>';
	                             }
	                          ?>
	                          </span>
	                        </td>
	                         <td>
	                          <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $sentiment["case_text"]; ?></p>
	                        </td>

	                        <td><a href="<?php echo base_url()?>admin/archive/restore/<?php echo $sentiment['case_id'] ?>"  class="btn btn-block btn-outline-warning">Restore</a></td>
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
			<!-- /.row -->


        </div>
        <!-- /.container-fluid -->

