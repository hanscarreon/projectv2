
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Meeting</h1>
    </div>


    <!-- Content Row -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pending Meeting</h6>
                
              
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
            <div class="card-body ">
                <table class="table table-striped table-responsive " id="dataTable">
                    <thead>
	                    <tr>
                        <!-- EDIT ARRANGE THE TABLE-->
                        <!-- <th>Case-ID No.</th> -->
                        <th>Name</th>
                        <th>Meet date</th>
                        <th>Sentiment</th>
                        <th>Reasons</th>
                        <th>Negative percentage</th>
                        <th>Negative Score</th>
                        <th>Positive percentage</th>
                        <th>Positive Score</th>
                        <th>Neutral percentage</th>
                        <th>Neutral Score</th>
                        <th>Result</th>
                        <!--EDITED-->
                        <th  colspan="" >Action</th>
	                    </tr>
	                  </thead>
                    <tbody>
                    <?php  if ( isset( $meetings ) && count($meetings) >= 1 ):?>
                     
                      <?php $x=1; foreach($meetings as $meeting): ?>
                        <tr>
                          <!-- <th scope="row"></th> -->
                          <td><?php echo $meeting['user_fname'] ?></td>
                          <td><?php echo date("F j, Y, g:i a",strtotime($meeting['meet_date'])) ?></td>
                          <!--EDITED-->
                          <td>
                            <p style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $meeting["case_text"]; ?></p>
                          </td>
                          <td style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; width:150px; "><?php echo $meeting['case_reason'] ?></td>
                          <td><?php echo $meeting['case_neg_percent'] ?></td>
                          <td><?php echo $meeting['case_neg'] ?></td>
                          <td><?php echo $meeting['case_pos_percent'] ?></td>
                          <td><?php echo $meeting['case_pos'] ?></td>
                          <td><?php echo $meeting['case_mid_percent'] ?></td>
                          <td><?php echo $meeting['case_mid'] ?></td>
                          <td><?php echo $meeting['case_result'] ?></td>
                          <!--EDITED-->
                          <td class="text-right"><a class="btn btn-primary" href="<?php echo base_url('guidance/meeting/ongoing/').$meeting['case_id'].'/'.$meeting['user_id'].'/'.$meeting['meet_id'] ?>"> Proceed </a></td>
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

    
    </d>
 