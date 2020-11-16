


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sentiment</h1>
    </div>


    <!-- Content Row -->
    <d class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sentiment</h6>
              
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
                <label for="case_text" class="col-sm-2 col-form-label">Student fullname</label>
                <div class="col-sm-10">
                <input type="" disabled class="form-control" id="user_fname" name="user_fname" value="<?php echo  $case[0]['user_fname']; ?>" >
                </div>
              </div>


            <form method="post">
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
                    <textarea class="form-control" id="case_text" name="case_text" disabled><?php echo $case[0]["case_text"] ?></textarea>
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
                            <a href="<?php echo base_url().$meeting['meet_file'] ?>" download="">Click to download file</a>
                            <textarea rows="5"    class="form-control mb-3" id="meet_note" name="meet_note" disabled><?php echo $meeting["meet_note"] ?></textarea>

                        </div>
                    <?php endforeach; ?>
                    </div>

                    <?php endif; ?>

                  <?php if (isset($guidances) && count($guidances) >= 1  ): ?>
                  <?php  foreach($guidances as $guidance): ?>
                    <div class="form-check form-check-inline mb-2 col-md-4 col-sm-6 col-12">
                      <input <?php echo $case[0]["admin_id"] == $guidance['admin_id'] ?'checked' :'' ?> class="form-check-input" type="radio" id="sir<?php echo $guidance['admin_id'] ?>" value="<?php echo $guidance['admin_id'] ?>" name="admin_id" disabled>
                      <label class="form-check-label" for="sir<?php echo $guidance['admin_id'] ?>" width="100%">
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
                                  <img src="<?php echo !empty($guidance['admin_pic'])? base_url().$guidance['admin_pic'] : base_url('resources/img/stud.png')  ?>" alt="no image available" class="img-circle img-fluid">
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


                <a href="<?php echo base_url('admin/sentiment/edit/').$case[0]['case_id'] ?>" type="button" class="btn btn-primary "> edit</a>
                </form>

                
            </div>
        </div>
    </div>

    
    </d>
