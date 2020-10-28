


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sentiment</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Create Sentiment</h6>
              
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

            <form method="post">
                <div class="form-group row">
                    <div class="col-sm-2">Reason</div>
                    <div class="col-sm-10">
                   
                      <?php $reasons = explode(',', $case[0]["case_reason"]);  ?>
                    
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo  in_array('academic',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="academic" value="academic" name="case_reason[]">
                            <label class="form-check-label" for="academic">academic</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo   in_array('family',$reasons) ? 'checked':'' ?> class="form-check-input" type="checkbox" id="family" value="family" name="case_reason[]">
                            <label class="form-check-label" for="family">family</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo   in_array('peers',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="peers" value="peers" name="case_reason[]">
                            <label class="form-check-label" for="peers">peers</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo in_array('relationship',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="relationship" value="relationship" name="case_reason[]">
                            <label class="form-check-label" for="relationship">relationship</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo in_array('emotion',$reasons)  ?  'checked':'' ?>  class="form-check-input" type="checkbox" id="emotion" value="emotion" name="case_reason[]">
                            <label class="form-check-label" for="emotion">emotion</label>
                        </div>
                        
                    </div>
                </div>
                <!-- /. checkbox -->
                <div class="form-group row">
                    <label for="case_text" class="col-sm-2 col-form-label">Write your Concern</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="case_text" name="case_text" disabled><?php echo $case[0]["case_text"] ?></textarea>
                    </div>
                </div>
                <!-- /. text -->
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Which do you prefer to receive a response?</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $case[0]["case_res"] == 'email'?'checked' :'' ?> type="radio" name="case_res" id="email" value="email" disabled>
                            <label class="form-check-label" for="Email">
                                Email
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="case_res" id="SMS" value="SMS" <?php echo $case[0]["case_res"] == 'SMS'?'checked' :'' ?> disabled >
                            <label class="form-check-label" for="SMS">
                                SMS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="case_res" id="zoom" value="zoom" id="zoom" <?php echo $case[0]["case_res"] == 'zoom'?'checked' :'' ?> disabled>
                            <label class="form-check-label" for="Zoom">
                                Zoom
                            </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                <!-- /. contact -->

                <!-- <?php echo print_r($guidances) ?> -->
                <?php  if(empty($guidances) || count($guidances) <= 0):  ?>
                  <div class="col-12 text-center">
                    <h1>No guidance counsilor available ...</h1>
                  </div>
                <?php  else: ?>
                <?php if (isset($meetings) && count($meetings) >= 1  ): ?>
                    <div class="form-group row">


                    <?php  foreach($meetings as $meeting): ?>
                    <label for="case_text" class="col-sm-2 col-form-label">Meeting info:</label>
                        <div class="col-sm-10">
                            <input class="form-control mb-3" id="case_text" name="case_text" disabled value="<?php echo date("F j, Y, g:i a",strtotime($meeting['meet_date'])) ?>">
                            <a href="<?php echo base_url().$meeting['meet_file'] ?>" download="">click to download file</a>
                            <textarea rows="5"    class="form-control mb-3" id="meet_note" name="meet_note" disabled><?php echo $meeting["meet_note"] ?></textarea>

                        </div>
                    <?php endforeach; ?>
                    </div>

                    <?php endif; ?>

                  <?php if (isset($guidances) && count($guidances) >= 1  ): ?>
                  <?php  foreach($guidances as $guidance): ?>
                    <div class="form-check form-check-inline mb-2">
                      <input <?php echo $case[0]["admin_id"] == $guidance['admin_id'] ?'checked' :'' ?> class="form-check-input" type="radio" id="sir<?php echo $guidance['admin_id'] ?>" value="<?php echo $guidance['admin_id'] ?>" name="admin_id" disabled>
                      <label class="form-check-label" for="sir<?php echo $guidance['admin_id'] ?>">
                        <div class="card bg-light">
                              <div class="card-header text-muted border-bottom-0">
                              <?php echo $guidance['admin_role'] ?>
                              </div>
                              <div class="card-body pt-0">
                              <div class="row">
                                  <div class="col-7">
                                  <h2 class="lead"><b><?php echo $guidance['admin_fname'] ?></b></h2>
                                  <p class="text-muted text-sm"><b>Expertise: </b> <?php echo $guidance['admin_expertise'] ?> </p>
                                  <ul class="ml-4 mb-0 fa-ul text-muted">
                                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Contact #: <?php  echo $guidance['admin_contact'] ?></li>
                                  </ul>
                                  </div>
                                  <div class="col-5 text-center">
                                  <img src="<?php echo base_url().$guidance['admin_pic'] ?>" alt="no image available" class="img-circle img-fluid">
                                  </div>
                              </div >
                              </div>
                          </div>
                      </label>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                <?php endif; ?>
                <br>
                <div hidden>
                    <input type="number" name="case_neg" id="case_neg"  >
                    <input type="text" name="case_neg_percent" id="case_neg_percent"  >
                    <!-- /. neg -->
                    <input type="number" name="case_mid" id="case_mid" >
                    <input  type="text" name="case_mid_percent" id="case_mid_percent" >
                    <!-- /. neutral -->
                    <input type="number" name="case_pos" id="case_pos"  >
                    <input  type="text" name="case_pos_percent" id="case_pos_percent"  >
                    <!-- /. positive -->
                    <input  type="text" name="case_result" id="case_result"  >
                    <input  type="number" name="case_line" id="case_line" >

                </div>


                <!-- <a href="<?php echo base_url('user/sentiment/edit/').$case[0]['case_id'] ?>" type="button" class="btn btn-primary "> edit</a> -->
                </form>

                
            </div>
        </div>
    </div>

    
    </div>
