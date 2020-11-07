
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
<!-- /. card header -->

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12">
        <div  class="dropdown mb-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo   $this->uri->segment("4")=='meeting' ? 'Accepted'
              : ( $this->uri->segment("4")=='plan' ? 'follow-up' 
              : ( $this->uri->segment("4")=='Pending'  ? 'pending' 
              : ( $this->uri->segment("4")=='plan'? 'Intervention Plan': 'Pending')))  ?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url('admin/dashboard/index/closed/published') ?>">Pending</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/dashboard/index/plan/published') ?>">follow-up</a>
          </div>
        </div>
      </div>

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pending Analysis</h6>
                
                <!-- <a href="<?php  echo base_url('user/sentiment/create') ?>" class="btn  btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="far fa-plus-square"></i>
                    </span>
                    <span class="text">Sentiment</span>
                </a>
               -->
                <!-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div> -->
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">
                <table class="table table-striped  " id="dataTable">
                    <thead>
	                    <tr>
                        <!-- <th>Case-ID No.</th> -->
                        <th>Name</th>
                        <th>Date created</th>
                        <th>Negative percentage</th>
                        <th>Negative Score</th>
                        <th>Positive percentage</th>
                        <th>Positive Score</th>
                        <th>Neutral percentage</th>
                        <th>Neutral Score</th>
                        <th>Result</th>
                        <th>Sentiment</th>
                        <th>Name of Counselor</th>
                        <th>Meeting Date</th>
                        <th>Reasons</th>
                        <th>status</th>
                        
                        <!-- <th  colspan="3" >Action</th> -->
                        <th >Action</th>
                        
	                    </tr>
	                  </thead>
                    <tbody>
                    <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
                     
                      <?php $x=1; foreach($sentiments as $sentiment): ?>
                        <tr>
                          <!-- <th scope="row"></th> -->
                          <td><?php echo $sentiment['user_fname'] ?></td>
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
                          <td><?php echo $sentiment['admin_fname'] ?></td>
                          <td>Meeting Date</td>
                          <td><?php echo $sentiment['case_reason'] ?></td>
                          <td><?php echo $sentiment['case_con'] ?></td>
                          <td class="text-right"><a href="<?php echo base_url('admin/sentiment/view/').$sentiment['case_id'] ?>"> <i class="fa fa-eye"></i> </a></td>

                          <!-- <td class="text-right"><a class="btn btn-primary" href="<?php echo base_url('guidance/meeting/create/').$sentiment['case_id'].'/'.$sentiment['user_id'] ?>"> accept </a></td> -->
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
    </div>

    
    </div>
 

