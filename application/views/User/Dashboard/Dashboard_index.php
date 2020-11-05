
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
            </div>
            <div class="col">
              <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- /. card header -->

    <!-- Content Row -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo   $this->uri->segment("4")=='meeting' ? 'Accepted'
                     : ( $this->uri->segment("4")=='closed' ? 'Closed Case' 
                     : ( $this->uri->segment("4")=='recommended'  ? 'Recomeended to' 
                     : ( $this->uri->segment("4")=='plan'? 'Intervention Plan': 'Pending')))  ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo base_url('user/dashboard/index/ongoing') ?>">Pending</a>
                    <a class="dropdown-item" href="<?php echo base_url('user/dashboard/index/meeting') ?>">Accepted</a>
                    <a class="dropdown-item" href="<?php echo base_url('user/dashboard/index/closed') ?>">closed</a>
                    <a class="dropdown-item" href="<?php echo base_url('user/dashboard/index/recommended') ?>">recommended</a>
                    <a class="dropdown-item" href="<?php echo base_url('user/dashboard/index/plan') ?>">Follow up</a>
                  </div>
                </div>
                <a href="<?php  echo base_url('user/sentiment/create') ?>" class="btn  btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="far fa-plus-square"></i>
                    </span>
                    <span class="text">Sentiment</span>
                </a>
              
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
            <div class="card-body  ">
               <div class="table-responsive">
               <table style="width: 100%;" class="table table-striped  text-center " id="dashboardTable">
               <!-- <?php echo print_r($sentiments) ?> -->
                    <?php if($this->uri->segment("4")=='ongoing'): ?>
                      <thead>
                          <!-- <th>Case-ID No.</th> -->
                          <th>student-ID</th>
                          <th>Date created</th>
                          <th>Sentiment</th>
                          <th>Name of Counselor</th>
                          <!-- <th>Meeting Date</th> -->
                          <th>Reasons</th>
                          <th>status</th>
                          <!-- <th  colspan="3" >Action</th> -->
                          <th >Action</th>
                          <th ></th>
                          <th ></th>
                        </tr>
                      </thead>
                      <tbody >
                        <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
                        
                          <?php $x=1; foreach($sentiments as $sentiment): ?>
                            <tr>
                              <!-- <th scope="row"></th> -->
                              <td><?php echo $sentiment['user_name'] ?></td>
                              <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
                              <td>
                                <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $sentiment["case_text"]; ?></p>
                              </td>
                              <td><?php echo $sentiment['admin_fname'] ?></td>
                              <!-- <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['meet_date'])) ?></td> -->
                              <td><?php echo $sentiment['case_reason'] ?></td>
                              <td><?php echo $sentiment['case_con'] ?></td>
                              <td class="text-right"><a href="<?php echo base_url('user/sentiment/view/').$sentiment['case_id'] ?>"> <i class="fa fa-eye"></i> </a></td>
                              <td> <?php echo $sentiment['case_con'] == 'ongoing' ?'<a  href="'. base_url('user/sentiment/edit/').$sentiment['case_id'].'"><i class="fa fa-edit"></i> </a>':'' ?> </td>
                              <td><?php echo $sentiment['case_con'] == 'closed' || $sentiment['case_con'] == 'recommended' ? '<a href="'.base_url('user/sentiment/delete/').$sentiment['case_id'].' <i class="fa fa-trash"></i> </a>' :'' ?> </td>
                            </tr>
                          <?php endforeach; ?>

                        <?php else: ?>
                            <tr>
                              <td colspan="18" class="text-center">No data</td>
                            </tr>
                        <?php endif;?>
                        </tbody>
                        <!-- /. ongoing -->

                        <?php elseif($this->uri->segment("4")=='meeting' || $this->uri->segment("4")=='closed' || $this->uri->segment("4")=='recommended'): ?>
                          <thead>
                            <!-- <th>Case-ID No.</th> -->
                            <th>student-ID</th>
                            <th>Date created</th>
                            <th>Sentiment</th>
                            <th>Name of Counselor</th>
                            <th>Meeting Date</th>
                            <th>Meeting Link</th>
                            <th>Reasons</th>
                            <th>note</th>
                            <th>status</th>
                            <!-- <th  colspan="3" >Action</th> -->
                            <th >Action</th>
                            <th ></th>
                            <th ></th>
              
                          </tr>
                        </thead>
                        <tbody >
                          <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
                          
                            <?php $x=1; foreach($sentiments as $sentiment): ?>
                              <tr>
                                <!-- <th scope="row"></th> -->
                                <td><?php echo $sentiment['user_name'] ?></td>
                                <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
                                <td>
                                  <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $sentiment["case_text"]; ?></p>
                                </td>
                                <td><?php echo $sentiment['admin_fname'] ?></td>
                                <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['meet_date'])) ?></td>
                                <td><a href="<?php echo $sentiment['meet_link']?>" target="_blank"><?php echo $sentiment['meet_link']?></a></td>
                                <td><?php echo $sentiment['case_reason'] ?></td>
                                <td><?php echo $sentiment['meet_note'] ?></td>
                                <td><?php echo $sentiment['case_con'] ?></td>
                                <td class="text-right"><a href="<?php echo base_url('user/sentiment/view/').$sentiment['case_id'] ?>"> <i class="fa fa-eye"></i> </a></td>
                                <td> <?php echo $sentiment['case_con'] == 'ongoing' ?'<a  href="'. base_url('user/sentiment/edit/').$sentiment['case_id'].'"><i class="fa fa-edit"></i> </a>':'' ?> </td>
                                <!-- <td><?php echo $sentiment['case_con'] == 'closed' || $sentiment['case_con'] == 'recommended' ? '<a href="'.base_url('user/sentiment/delete/').$sentiment['case_id'].'> <i class="fa fa-trash"></i> </a>' :'' ?> </td> -->
                                <td> <?php echo $sentiment['case_con'] == 'closed' || $sentiment['case_con'] == 'recommended' ?'<a  href="'. base_url('user/sentiment/delete/').$sentiment['case_id'].'"><i class="fa fa-trash"></i> </a>':'' ?> </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                              <tr>
                                <td colspan="18" class="text-center">No data</td>
                              </tr>
                          <?php endif;?>
                        </tbody>
                      <?php elseif(($this->uri->segment("4")=='plan')): ?>
                        <thead>
                            <!-- <th>Case-ID No.</th> -->
                            <th>student-ID</th>
                            <th>Date created</th>
                            <th>Sentiment</th>
                            <th>Name of Counselor</th>
                            <th>Meeting Date</th>
                            <th>Meeting Link</th>
                            <th>File</th>
                            <th>Reasons</th>
                            <th>note</th>
                            <th>status</th>
                            <!-- <th  colspan="3" >Action</th> -->
                            <th >Action</th>
                            <th ></th>
                            <th ></th>
                          </tr>
                        </thead>
                        <tbody >
                          <?php  if ( isset( $sentiments ) && count($sentiments) >= 1 ):?>
                          
                            <?php $x=1; foreach($sentiments as $sentiment): ?>
                              <tr>
                                <!-- <th scope="row"></th> -->
                                <td><?php echo $sentiment['user_name'] ?></td>
                                <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['case_created'])) ?></td>
                                <td>
                                  <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $sentiment["case_text"]; ?></p>
                                </td>
                                <td><?php echo $sentiment['admin_fname'] ?></td>
                                <td><?php echo date("F j, Y, g:i a",strtotime($sentiment['meet_date'])) ?></td>
                                <td><a href="<?php echo $sentiment['meet_link']?>" target="_blank"><?php echo $sentiment['meet_link']?></a></td>
                                <td><a href="<?php echo $sentiment['meet_link']?>" download=""><?php echo !empty($sentiment['meet_file'])?'Click to Download' :'No file avalable' ?></a></td>
                                <td><?php echo $sentiment['case_reason'] ?></td>
                                <td><?php echo $sentiment['meet_note'] ?></td>
                                <td><?php echo $sentiment['case_con'] ?></td>
                                <td class="text-right"><a href="<?php echo base_url('user/sentiment/view/').$sentiment['case_id'] ?>"> <i class="fa fa-eye"></i> </a></td>
                                <td> <?php echo $sentiment['case_con'] == 'ongoing' ?'<a  href="'. base_url('user/sentiment/edit/').$sentiment['case_id'].'"><i class="fa fa-edit"></i> </a>':'' ?> </td>
                                <!-- <td><?php echo $sentiment['case_con'] == 'closed' || $sentiment['case_con'] == 'recommended' ? '<a href="'.base_url('user/sentiment/delete/').$sentiment['case_id'].'> <i class="fa fa-trash"></i> </a>' :'' ?> </td> -->
                                <td> <?php echo $sentiment['case_con'] == 'closed' || $sentiment['case_con'] == 'recommended' ?'<a  href="'. base_url('user/sentiment/delete/').$sentiment['case_id'].'"><i class="fa fa-trash"></i> </a>':'' ?> </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                              <tr>
                                <td colspan="18" class="text-center">No data</td>
                              </tr>
                          <?php endif;?>
                        </tbody>

                    <?php endif; ?>
                    <!-- /.cons -->
                    
                </table>
               </div>
            </div>
        </div>
    </div>

    
    </div>
 

