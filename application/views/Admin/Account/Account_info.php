<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
                <h6 class="m-0 font-weight-bold text-primary">info Info</h6>
                <div class="text-center">
                  <img class="info-admin-img img-fluid img-circle" height="auto" width="30%" src="<?php echo !empty($info[0]['admin_pic']) ? base_url().$info[0]['admin_pic'] :  base_url('resources/img/stud.png') ?>" alt="no info picture available">
                </div>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">
                        <div class="form-group row">
                        <label for="user_fname" class="col-sm-2 col-form-label">First Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input disabled type="text" class="form-control"  id="user_fname" name="user_fname" value="<?php echo ucfirst($info[0]['user_fname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. First Name -->

	            	</div>
	      		  </form>
                <!-- /. card body -->
                <h6 class="m-0 font-weight-bold text-primary text-center m-2">Sentiment Records</h6>
               <div class="table-responsive"> 
                <table class="table table-striped  " id="info-table">
                    <thead>
	                    <tr>
                        <th>Date created</th>
                        <th>Negative percentage</th>
                        <th>Negative Score</th>
                        <th>Positive percentage</th>
                        <th>Positive Score</th>
                        <th>Neutral percentage</th>
                        <th>Neutral Score</th>
                        <th>Result</th>
                        <th>Sentiment</th>
                        <th>Reasons</th>
	                    </tr>
	                  </thead>
                    <tbody>
                        <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
                            
                            <?php $x=1; foreach($sentiments as $sentiment): ?>
                            <tr>
                                <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
                                <td><?php echo $sentiment['case_neg_percent'] ?></td>
                                <td><?php echo $sentiment['case_neg'] ?></td>
                                <td><?php echo $sentiment['case_pos_percent'] ?></td>
                                <td><?php echo $sentiment['case_pos'] ?></td>
                                <td><?php echo $sentiment['case_mid_percent'] ?></td>
                                <td><?php echo $sentiment['case_mid'] ?></td>
                                <td><?php echo $sentiment['case_result'] ?></td>
                                <td>
                                <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $sentiment["case_text"]; ?></p>
                                </td>
                                <td><?php echo $sentiment['case_reason'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                            <!-- <th scope="row"></th> -->
                            <td colspan="18" class="text-center">No data</td>
                            </tr>
                            <?php endif;?>

                    </tbody>
                </table>
                </div>

	          </div>
	          <!-- /. card shadow -->
	        </div> 
	        <!-- /. row -->
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
	

</script>