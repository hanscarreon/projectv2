    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Set Meeting</h1>
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

            <?php $reasons = explode(',', $case[0]["case_reason"]);  ?>

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
                    <textarea class="form-control" id="case_text" name="case_text" disabled><?php echo $case[0]['case_text'] ?></textarea>
                    </div>
                </div>
                <!-- /. text -->
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Which do you prefer to receive a response?</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" <?php  echo $case[0]['case_res'] == 'email' ? 'checked' : '' ?> disabled name="case_res" id="Email" value="email">
                            <label class="form-check-label" for="Email">
                                Email
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="case_res" id="SMS" value="SMS" <?php  echo $case[0]['case_res'] == 'SMS' ? 'checked' : '' ?> disabled>
                            <label class="form-check-label" for="SMS">
                                SMS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="case_res" id="gridRadios3" value="Zoom" <?php  echo $case[0]['case_res'] == 'zoom' ? 'checked' : '' ?> disabled>
                            <label class="form-check-label" for="Zoom">
                                Zoom
                            </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                <!-- /. contact -->
                  <div class="form-group row">
                      <label for="case_text" class="col-sm-2 col-form-label">Meeting date</label>
                      <div class="col-sm-10">
                      <input type="text" disabled class="form-control" id="meet_date" name="meet_date" value="<?php echo  date("F j, Y, g:i a",strtotime($meet[0]['meet_date'])) ?>" >
                      </div>
                  </div>
                  <div  hidden>
                  <input type="number" class="form-control" id="case_id" name="case_id" value="<?php echo $case_id ?>">
                  <input type="number" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id ?>" >
                  <input type="number" class="form-control" id="meet_id" name="meet_id" value="<?php echo $meet_id ?>">
                    
                  </div>

                  <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-0">

                  </div>

                      <div class="col-sm-10 col-12">
                        <form method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="meet_link" name="meet_link" value="<?php echo !empty($meet[0]['meet_link'])? $meet[0]['meet_link'] : '' ?>"  aria-label="Text input with dropdown button">
                            <input type="text" hidden class="form-control" id="meet_id" name="meet_id"  value="<?php echo $meet_id ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary " type="submit" value="send_link" name="send_link" aria-expanded="false">send link</button>
                            </div>
                        </div>
                        </form>

                      </div>
                  </div>

                  <div class="form-group row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-0">

                  </div>

                      <div class="col-sm-10 col-12">
                          <form method="post" enctype="multipart/form-data">
                          <input type="text" hidden class="form-control" id="meet_id" name="meet_id"  value="<?php echo $meet_id ?>">
                            <div class="input-group">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="meet_file" name="meet_file" >
                                      <label class="custom-file-label" for="">Choose file</label>
                                  </div>
                                  <div class="input-group-append">
                                      <button class="btn btn-outline-secondary" type="submit" value="upload_file" name="upload_file" id="">upload</button>
                                  </div>

                            </div>
                          </form>
                      </div>
                      <div class="col-12 text-center mt-3 mb-3">
                                  
                        <?php if(!empty($meet[0]['meet_file'])): ?>
                          <a href="<?php echo base_url().$meet[0]['meet_file'] ?>" download="" target="_blank">Download file</a>
                        <?php else: ?>
                          no file yet
                        <?php endif; ?>
                      </div>
                  </div>

               
                  <form method="post" >

                  <div class="form-group row">
                      <label for="meet_note" class="col-sm-2 col-form-label">Meeting note</label>
                      <div class="col-sm-10">
                      <textarea class="form-control" id="meet_note" name="meet_note" disabled ><?php echo $meet[0]['meet_note'] ?></textarea>
                      </div>
                  </div>


                  <input hidden  type="number" class="form-control" id="case_id" name="case_id" value="<?php echo $case_id ?>">
                  <input hidden  type="number" class="form-control" id="meet_id" name="meet_id" value="<?php echo $meet_id ?>">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Case status?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="case_con" id="closed" value="closed" disabled <?php  echo $case[0]['case_con'] == 'closed' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="closed">
                                closed
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"    name="case_con" id="recommended" disabled value="recommended"  <?php  echo $case[0]['case_con'] == 'recommended' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="recommended">
                                    recommeded to...
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="case_con" id="plan" value="plan" disabled  <?php  echo $case[0]['case_con'] == 'plan' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="plan">
                                    intervention plan
                                </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                        <!-- <button type="submit" value="done" name="done" class="btn btn-primary">done</button> -->
                  </form>

                    

                
           
            </div>
        </div>
    </div>

    
    </div>
 