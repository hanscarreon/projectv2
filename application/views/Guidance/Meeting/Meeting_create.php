    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Set Meeting</h1>
    </div>


    <!-- Content Row -->
    <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Set Meeting</h6>
              
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
                <div class="form-group row">
                  <label for="case_text" class="col-sm-2 col-form-label">Student Fullname</label>
                  <div class="col-sm-10">
                  <input type="" disabled class="form-control" id="user_fname" name="user_fname" value="<?php echo  $case[0]['user_fname']; ?>" >
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">Reason</div>
                    <div class="col-sm-10">
                   
                      <?php $reasons = explode(',', $case[0]["case_reason"]);  ?>
                    
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo  in_array('academic',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="academic" value="academic" name="case_reason[]">
                            <label class="form-check-label" for="academic">Academic</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo   in_array('family',$reasons) ? 'checked':'' ?> class="form-check-input" type="checkbox" id="family" value="family" name="case_reason[]">
                            <label class="form-check-label" for="family">Family</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo   in_array('peers',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="peers" value="peers" name="case_reason[]">
                            <label class="form-check-label" for="peers">Peers</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo in_array('relationship',$reasons)  ? 'checked':'' ?> class="form-check-input" type="checkbox" id="relationship" value="relationship" name="case_reason[]">
                            <label class="form-check-label" for="relationship">Relationship</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled  <?php echo in_array('emotion',$reasons)  ?  'checked':'' ?>  class="form-check-input" type="checkbox" id="emotion" value="emotion" name="case_reason[]">
                            <label class="form-check-label" for="emotion">Emotion</label>
                        </div>
                        
                    </div>
                </div>
                <!-- /. checkbox -->
                <div class="form-group row">
                    <label for="case_text" class="col-sm-2 col-form-label">Write your Concern</label>
                    <div class="col-sm-10">
                    <textarea rows="6"  class="form-control" id="case_text" name="case_text" disabled><?php echo $case[0]['case_text'] ?></textarea>
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
                            <input class="form-check-input" type="radio" name="case_res" id="gmeet" value="gmeet" <?php  echo $case[0]['case_res'] == 'gmeet' ? 'checked' : '' ?> disabled>
                            <label class="form-check-label" for="gmeet">
                               Google Meet Link
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="case_res" id="gmeet" value="gmeet" <?php  echo $case[0]['case_res'] == 'zoom' ? 'checked' : '' ?> disabled>
                            <label class="form-check-label" for="gmeet">
                                Zoom Link
                            </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                <!-- /. contact -->
                <form method="post">
                <?php 
                    $dt = date('Y-m-d');
                    echo $dt.'T00:00';
                  ?>
                  <div class="form-group row">
                      <label for="case_text" class="col-sm-2 col-form-label">Set Meeting Date</label>
                      <div class="col-sm-10">
                      <input type="datetime-local" class="form-control" id="meet_date" name="meet_date" min="<?php 
                    $dt = date('Y-m-d');
                    echo $dt.'T00:00';
                  ?>"  >
                      </div>
                  </div>
                  <div hidden >
                  <input type="number" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id ?>" >
                  <input type="number" class="form-control" id="case_id" name="case_id" value="<?php echo $case_id ?>">
                    
                  </div>
                 <button type="submit" class="btn btn-primary">Set Date</button>

                    
                </form>

                
           
            </div>
        </div>
    </div>

    
    </d>
 