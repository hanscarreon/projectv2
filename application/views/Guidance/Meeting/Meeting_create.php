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

                <div class="form-group row">
                    <div class="col-sm-2">case_reason</div>
                    <div class="col-sm-10">
                      <h1><?php echo $case[0]['case_reason'] ?></h1>
                        
                        
                    </div>
                </div>
                <!-- /. checkbox -->
                <div class="form-group row">
                    <label for="case_text" class="col-sm-2 col-form-label">Write your Concern</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="case_text" name="case_text" disabled>
                    <?php echo $case[0]['case_text'] ?>
                    </textarea>
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
                <form method="post">
                  <?php echo $test ?>
                  <div class="form-group row">
                      <label for="case_text" class="col-sm-2 col-form-label">Write your Concern</label>
                      <div class="col-sm-10">
                      <input type="datetime-local" class="form-control" id="meet_date" name="meet_date" >
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

    
    </div>
 