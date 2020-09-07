

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




 <!-- small box -->
    <!--   <?php if($this->uri->segment("5") == 'positive'): ?>
        <?php 
          $case_num = $positive; 
          $class_value = 'bg-success'; 
          $case_text = "Total Positve";
          $case_emoji = "far fa-laugh";
          $case_link = "admin/dashboard/index/name/positive/con";
        ?>
      <?php elseif($this->uri->segment("5") == 'neutral'): ?>
        <?php 
          $case_num = $neutral; 
          $class_value = 'bg-warning'; 
          $case_text = "Total Neutral";
          $case_emoji = "far fa-meh";
          $case_link = "admin/dashboard/index/name/neutral/con";
        ?>
      <?php elseif($this->uri->segment("5") == 'negative'): ?>
        <?php 
          $case_num = $negative; 
          $class_value = 'bg-danger'; 
          $case_text = "Total Negative";
          $case_emoji = "far fa-angry";
          $case_link = "admin/dashboard/index/name/negative/con";
        ?>
      <?php else: ?>
        <?php 
          $case_num = $total; 
          $class_value = 'bg-info'; 
          $case_text = "Total Analysis";
          $case_emoji = "ion ion-clipboard";
          $case_link = "admin/dashboard/index/name/study/con";
        ?>
      <?php endif;?> -->


<!-- Begin Page Content -->
        <div class="container-fluid">
        	<div class="row">

	          <!-- Page Heading -->
	          <h1 class="col-12 h3 mb-2 text-gray-800">Dashboard</h1>
	          <!-- <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-gold shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-color-gold text-uppercase mb-1"><?php echo ucwords($case_text) ?></div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($case_num); ?></div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="<?php echo $case_emoji ?> fa-2x text-gray-300"></i>
	                    </div>
	                  </div>
	                 	 <div class="dropdown mb-4 ">
		                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		                      Filter By
		                    </button>
		                    <div class="dropdown-menu animated--fade-in " aria-labelledby="dropdownMenuButton" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start">
		                      <a class="dropdown-item" href="<?php echo base_url() ?>admin/dashboard/index/name/study/con">All</a>
		                      <a class="dropdown-item" href="<?php echo base_url() ?>admin/dashboard/index/name/positive/con">Positive</a>
		                      <a class="dropdown-item" href="<?php echo base_url() ?>admin/dashboard/index/name/negative/con">Negative</a>
		                      <a class="dropdown-item" href="<?php echo base_url() ?>admin/dashboard/index/name/neutral/con">Neutral</a>
		                    </div>
		                  </div>
	                </div>
	              </div>
	            </div> -->
	            <!-- /. card -->

	          <!-- DataTales Example -->
	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Pending Analysis</h6>
		              <a href="<?php  echo base_url('student/sentiment/create') ?>" class="btn btn-primary btn-icon-split">
		                <span class="icon text-white-50">
		                  <i class="far fa-plus-square"></i>
		                </span>
		                <span class="text">Add sentiment</span>
		              </a>
		              <!-- /. create button sentiment -->
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                        <th>Case-ID No.</th>
	                        <th>Name</th>
	                        <th>Date created</th>
	                        <th>Result</th>
	                        <th>Sentiment</th>
	                        <th>Action</th>
	                        <th></th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                     <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
	                      <?php $x=1; foreach($sentiments as $sentiment): ?>
	                      <tr>
	                      <td><?php echo $sentiment['case_id'] ?></td>
	                        <td><?php echo ucfirst($sentiment['user_fname']); ?> <?php echo ucfirst($sentiment['user_mname']); ?> <?php echo ucfirst($sentiment['user_lname']); ?></td>
	                        <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
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

	                        <td><a  href="<?php echo base_url()?>student/sentiment/view/<?php echo $sentiment['case_id'] ?>" class="btn btn-block btn-outline-info">View</a></td>
	                        <td><a href="<?php echo base_url()?>admin/dashboard/delete_case/<?php echo $sentiment['case_id'] ?>"  class="btn btn-block btn-outline-danger">Delete</a></td>
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

