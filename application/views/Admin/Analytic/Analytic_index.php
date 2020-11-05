
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Analytic</h1>
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
    <div class="col-xl-8 col-lg-7">

<!-- Area Chart -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
  </div>
  <div class="card-body">
    <div class="chart-area">
      <canvas id="myAreaChart"></canvas>
    </div>
    <hr>
  </div>
</div>


</div>

<!-- Donut Chart -->
<div class="col-xl-4 col-lg-5">
<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    <div class="chart-pie pt-4">
      <canvas id="myPieChart"></canvas>
    </div>
    <hr>
  </div>
</div>
</div>



<div class="col-xl-12 col-lg-12 col-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Date Filter</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body ">
            <form class="form-horizontal" method="post" >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="filter_from">From</label>
                  <input type="date" class="form-control" id="filter_from" name="filter_from" placeholder="" value="">
                </div>
                <div class="form-group col-md-6">
                  <label for="filter_to">To</label>
                  <input type="date" class="form-control" id="filter_to" name="filter_to" placeholder="" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="filter_from" class="col-sm-2 col-form-label">From</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="filter_from" name="filter_from" placeholder="" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="filter_to" class="col-sm-2 col-form-label">To</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="filter_to" name="filter_to" placeholder="" value="">
                </div>
              </div>

              <div class="form-group row">
                <label for="user_division" class="col-sm-2 col-form-label">Case *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="filter_case" name="user_division" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="all">all</option>
                    <option value="closed">Closed</option>
                    <option value="recommended">Recommended</option>
                    <option value="plan">Follow-up</option>
                    </select>
                    </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="filter_gender" class="col-sm-2 col-form-label">Gender *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="filter_gender" name="filter_gender" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="all">all</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="lgbtq">LGBTQ</option>
                    </select>
                    </div>
                </div>
              </div>

              <div class="form-group row">
                  <label for="filter_division" class="col-sm-2 col-form-label">Division *</label>
                  <div class="err col-sm-10">
                  <div class="input-group mb-3">
                      <select class="form-control select2 select2-hidden-accessible" id="filter_division" name="filter_division" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="">Select Curriculum Level</option>
                      <option value="elementary school">Elementary Highschool</option>
                      <option value="junior highschool">Junior Highschool</option>
                      <option value="senior highschool">Senior Highschool</option>
                      <option value="college">College</option>
                      <option value="law school">Law School</option>
                      <option value="graduate">Graduate</option>
                      </select>
                      </div>
                  </div>
                </div>

                <div class="card-footer text-right">
                  <button type="submit"  class="btn btn-info ">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
              
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Analytic Analysis</h6>
              
                <!-- <div class="dropdown">
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
                </div> -->
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
            <div class="card-body ">
              <div class="table-responsive">
              <table class="table table-striped  " id="dataTable">
                    <thead>
	                    <tr>
                        <th>Total Sentiment</th>
                        <th>Total Negative</th>
                        <th>Total Negative Percentage</th>
                        <th>Total Positive</th>
                        <th>Total Positive Percentage</th>
                        <th>Total Neutral</th>
                        <th>Total Neutral Percentage</th>
                        <th>Case</th>
                        <th>Division</th>
                        <th>Gender</th>
                        <th>From</th>
                        <th>To</th>
	                    </tr>
	                  </thead>
                    <tbody>
                    <?php  if ( isset( $analytics ) && count($analytics) >= 1 ):?>
                     
                      <?php $x=1; foreach($analytics as $analytic): ?>
                        <tr>
                          <!-- <th scope="row"></th> -->
                          <td><?php echo $analytics['user_fname'] ?></td>
                          <td><?php echo date("F j, Y, g:i a",strtotime($analytics['case_created'])) ?></td>
                          <td><?php echo $analytics['case_neg_percent'] ?></td>
                          <td><?php echo $analytics['case_neg'] ?></td>
                          <td><?php echo $analytics['case_pos_percent'] ?></td>
                          <td><?php echo $analytics['case_pos'] ?></td>
                          <td><?php echo $analytics['case_mid_percent'] ?></td>
                          <td><?php echo $analytics['case_mid'] ?></td>
                          <td><?php echo $analytics['case_result'] ?></td>
                        <?php endforeach; ?>
                        <?php else: ?>
                      <tr>
                        <!-- <th scope="row"></th> -->
                        <td colspan="9" class="text-center">No data</td>
                      </tr>
	                  <?php endif;?>

                    </tbody>
                </table>

              </div>
                
            </div>
        </div>
    </div>

    
    </div>
 

