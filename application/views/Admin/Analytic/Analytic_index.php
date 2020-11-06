
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Analytic</h1>
    </div>

    <!-- Content Row -->

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
                  <input type="date" class="form-control" id="filter_from" name="filter_from" placeholder="" value="<?php echo $this->uri->segment(4) ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="filter_to">To</label>
                  <input type="date" class="form-control" id="filter_to" name="filter_to" placeholder="" value="<?php echo $this->uri->segment(5) ?>">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4 col-12">
                  <label for="filter_case">Case </label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_case" name="filter_case" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="">all</option>
                    <option value="closed" <?php echo $this->uri->segment(6) == 'closed'? 'selected': '' ?>  >Closed</option>
                    <option value="recommended"  <?php echo $this->uri->segment(6) == 'recommended'? 'selected': '' ?>  >Recommended</option>
                    <option value="plan"  <?php echo $this->uri->segment(6) == 'plan'? 'selected': '' ?> >Follow-up</option>
                  </select>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label for="filter_gender">Gender </label>
                    <select class="form-control select2 select2-hidden-accessible" id="filter_gender" name="filter_gender" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="">all</option>
                      <option value="male" <?php echo $this->uri->segment(7) =='male' ? 'selected':'' ?> >Male</option>
                      <option value="female" <?php echo $this->uri->segment(7) =='female' ? 'selected':'' ?> >Female</option>
                      <option value="lgbtq" <?php echo $this->uri->segment(7) =='lgbtq' ? 'selected':'' ?> >LGBTQ</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-12">
                  <label for="filter_division">Division </label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_division" name="filter_division" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="">All</option>
                        <option value="elementary school" <?php echo str_replace("-", " ", $this->uri->segment(8)) == 'elementary school' ? 'selected' :'' ?> >Elementary Highschool</option>
                        <option value="junior highschool" <?php echo str_replace("-", " ", $this->uri->segment(8)) =='junior school' ? 'selected' :'' ?> >Junior Highschool</option>
                        <option value="senior highschool" <?php echo str_replace("-", " ", $this->uri->segment(8))=='senior school' ? 'selected' :'' ?> >Senior Highschool</option>
                        <option value="college" <?php echo str_replace("-", " ", $this->uri->segment(8))=='college' ? 'selected' :'' ?> >College</option>
                        <option value="law school" <?php echo str_replace("-", " ", $this->uri->segment(8))=='law school' ? 'selected' :'' ?>>Law School</option>
                        <option value="graduate" <?php echo str_replace("-", " ", $this->uri->segment(8))=='graduate' ? 'selected' :'' ?> >Graduate</option>
                  </select>
                </div>
                <br>
                <br>
                <div class="form-group col-md-6">
                  <label for="filter_student">Students</label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_student" name="filter_student" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="">all</option>
                        <?php $x=1; foreach($students as $student): ?>
                        <option value="<?php echo $student['user_id'] ?>"><?php echo $student['user_fname'] ?></option>
                        <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="filter_admin">Admin</label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_admin" name="filter_admin" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                         <option value="">all</option>
                        <?php $x=1; foreach($guidances as $guidance): ?>
                        <option value="<?php echo $guidance['admin_id'] ?>"><?php echo $guidance['admin_fname'] ?></option>
                        <?php endforeach; ?>
                  </select>

                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
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
                    <table class="table table-striped " id="dataTable">
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
                                <th>Student</th>
                                <th>Guidance</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td><?php echo $total ?></td>
                                <td><?php echo $totalneg ?></td>
                                <td><?php echo round($negpercentage).'%' ?></td>
                                <td><?php echo $totalPos ?></td>
                                <td><?php echo round($pospercentage).'%' ?></td>
                                <td><?php echo $totalMid ?></td>
                                <td><?php echo round($midpercentage).'%' ?></td>
                                <td><?php echo $this->uri->segment(6) ?></td>
                                <td><?php echo str_replace("-", " ", $this->uri->segment(8)) ?></td>
                                <td><?php echo str_replace("-", " ", $this->uri->segment(7)) ?></td>
                                <td><?php echo $this->uri->segment(4) ?></td>
                                <td><?php echo $this->uri->segment(5) ?></td>
                                <td><?php echo $studs == 'All' ? 'All' : $studs[0]['user_fname'] ?></td>
                                <td><?php echo $adss == 'All' ? 'All'  :$adss[0]['admin_fname'] ?></td>
                              </tr>
                          </tbody>
                      </table>
              </div>
                
            </div>
        </div>
    </div>

    
    </div>
 

