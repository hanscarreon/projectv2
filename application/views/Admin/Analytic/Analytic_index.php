
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




<div class="col-xl-12 col-lg-12 col-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
          
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Analytics Filter</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body ">
            <form class="form-horizontal" method="post" >
              <div class="form-row">
                <div class="form-group col-md-4 col-sm-12 col-12">
                  <label for="filter_from">From</label>
                  <input type="date" class="form-control" id="filter_from" name="filter_from" placeholder="" value="<?php echo $this->uri->segment(4) ?>">
                </div>
                <div class="form-group col-md-4 col-sm-12 col-12">
                  <label for="filter_to">To</label>
                  <input type="date" class="form-control" id="filter_to" name="filter_to" placeholder="" value="<?php echo $this->uri->segment(5) ?>">
                </div>
                <div class="form-group col-md-4 col-sm-12 col-12">
                  <label for="filter_admin">Admin</label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_admin" name="filter_admin" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                         <option value="">all</option>
                        <?php $x=1; foreach($guidances as $guidance): ?>
                        <option value="<?php echo $guidance['admin_id'] ?>" <?php echo intval($this->uri->segment(10)) == $guidance['admin_id'] ? 'selected' : '' ?> ><?php echo $guidance['admin_fname'] ?></option>
                        <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <!-- <div class="form-row">
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
                        <option value="elementary school" <?php echo str_replace("-", " ", $this->uri->segment(8)) == 'elementary school' ? 'selected' :'' ?> >Elementary School</option>
                        <option value="junior highschool" <?php echo str_replace("-", " ", $this->uri->segment(8)) =='junior highschool' ? 'selected' :'' ?> >Junior Highschool</option>
                        <option value="senior highschool" <?php echo str_replace("-", " ", $this->uri->segment(8))=='senior highschool' ? 'selected' :'' ?> >Senior Highschool</option>
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
                        <option value="<?php echo $student['user_id'] ?>" <?php echo intval($this->uri->segment(9)) == $student['user_id'] ? 'selected' : '' ?> ><?php echo $student['user_fname'] ?></option>
                        <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="filter_admin">Admin</label>
                  <select class="form-control select2 select2-hidden-accessible" id="filter_admin" name="filter_admin" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                         <option value="">all</option>
                        <?php $x=1; foreach($guidances as $guidance): ?>
                        <option value="<?php echo $guidance['admin_id'] ?>" <?php echo intval($this->uri->segment(10)) == $guidance['admin_id'] ? 'selected' : '' ?> ><?php echo $guidance['admin_fname'] ?></option>
                        <?php endforeach; ?>
                  </select>
                </div>
              </div> -->
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
              </div>
                <!-- /.card-footer -->
            </form>
              
            </div>
        </div>
    </div>





     <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
      <!-- Area Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Monthly</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="monthlyChart"></canvas>
              </div>
              <hr>
            </div>
          </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
      <!-- Area Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Strand/Degree</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="divisionChart"></canvas>
              </div>
              <hr>
            </div>
          </div>
      </div>
<!-- Donut Chart -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Result</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4">
            <canvas id="resultChart"></canvas>
          </div>
          <hr>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Case</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4">
            <canvas id="caseChart"></canvas>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Gender</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4">
            <canvas id="genderChart"></canvas>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Reasons/Cause</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4">
            <canvas id="reasonChart"></canvas>
          </div>
          <hr>
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
                    <table class="table table-striped " id="analytics">
                          <thead>
                            <tr>
                                <th>Name </th>
                                <th>Total </th>
                                <th>Total Percentage</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Counselor</th>
                            </tr>
                            <!-- <tr>
                                <th>Total Sentiment</th>
                                <th>Total Negative</th>
                                <th>Total Negative Percentage</th>
                                <th>Total Positive</th>
                                <th>Total Positive Percentage</th>
                                <th>Total Neutral</th>
                                <th>Total Neutral Percentage</th>
                                <th>Total Closed Case</th>
                                <th>Total Closed Case Percentage</th>
                                <th>Total Recommended Case</th>
                                <th>Total Recommended Case Percentage</th>
                                <th>Total Intervention/Follow-up Case</th>
                                <th>Total Intervention/Follow-up Case Percentage</th>
                                <th>Total Male</th>
                                <th>Total Male Percentage</th>
                                <th>Total Female</th>
                                <th>Total Female Percentage</th>
                                <th>Total LGBTQ</th>
                                <th>Total LGBTQ Percentage</th>
                                <th>Total Acdemic</th>
                                <th>Total Acdemic Percentage</th>
                                <th>Total Family</th>
                                <th>Total Family Percentage</th>
                                <th>Total Peers</th>
                                <th>Total Peers Percentage</th>
                                <th>Total Relationship</th>
                                <th>Total Relationship Percentage</th>
                                <th>Total Emotion</th>
                                <th>Total Emotion Percentage</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Guidance</th>
                            </tr> -->
                                <!-- <th>Case</th>
                                <th>Division</th>
                                <th>Gender</th> -->
                                <!-- <th>Student</th> -->
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">All Sentiment</th>
                              <td ><?php echo $total ?></td>
                              <td > N/A </td>
                              <td><?php echo $this->uri->segment(4) ?></td>
                              <td><?php echo $this->uri->segment(5) ?></td>
                              <td class="text-center"><?php echo $adss == 'All' ? 'All'  :$adss[0]['admin_fname'] ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Positive Result</th>
                              <td ><?php echo $totalPos ?></td>
                              <td ><?php echo round($pospercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Negative Result</th>
                              <td ><?php echo $totalneg ?></td>
                              <td ><?php echo round($negpercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Neutral Result</th>
                              <td ><?php echo $totalMid ?></td>
                              <td ><?php echo round($midpercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Closed Case</th>
                              <td ><?php echo $totalClosed ?></td>
                              <td ><?php echo round($Closedercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Recommended Case</th>
                              <td ><?php echo $totalRecommended ?></td>
                              <td ><?php echo round($RecommendedPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Intervention/Follow-up Case</th>
                              <td ><?php echo $totalPlan ?></td>
                              <td ><?php echo round($PlanPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Male</th>
                              <td ><?php echo $totalMale ?></td>
                              <td ><?php echo round($MalePercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Female</th>
                              <td ><?php echo $totalFemale ?></td>
                              <td ><?php echo round($FemalePercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">LGBTQ</th>
                              <td ><?php echo $totallgbtq ?></td>
                              <td ><?php echo round($lgbtqPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Academic</th>
                              <td ><?php echo $totalAcademic ?></td>
                              <td ><?php echo round($academicPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Family</th>
                              <td ><?php echo $totalFamily ?></td>
                              <td ><?php echo round($familyPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Peers</th>
                              <td ><?php echo $totalPeers ?></td>
                              <td ><?php echo round($peerPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Relationship</th>
                              <td ><?php echo $totalRelationship ?></td>
                              <td ><?php echo round($relationshipPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Emotion</th>
                              <td ><?php echo $totalEmotion ?></td>
                              <td ><?php echo round($emotionPercentage).'%' ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>


                              <!-- <tr>
                                <td><?php echo $total ?></td>
                                <td><?php echo $totalneg ?></td>
                                <td><?php echo round($negpercentage).'%' ?></td>
                                <td><?php echo $totalPos ?></td>
                                <td><?php echo round($pospercentage).'%' ?></td>
                                <td><?php echo $totalMid ?></td>
                                <td><?php echo round($midpercentage).'%' ?></td>
                                <td><?php echo $totalClosed ?></td>
                                <td><?php echo round($Closedercentage).'%' ?></td>
                                <td><?php echo $totalRecommended ?></td>
                                <td><?php echo round($RecommendedPercentage).'%' ?></td>
                                <td><?php echo $totalPlan ?></td>
                                <td><?php echo round($PlanPercentage).'%' ?></td>
                                <td><?php echo $totalMale ?></td>
                                <td><?php echo round($MalePercentage).'%' ?></td>
                                <td><?php echo $totalFemale ?></td>
                                <td><?php echo round($FemalePercentage).'%' ?></td>
                                <td><?php echo $totallgbtq ?></td>
                                <td><?php echo round($lgbtqPercentage).'%' ?></td>
                                <td><?php echo $totalAcademic ?></td>
                                <td><?php echo round($academicPercentage).'%' ?></td>
                                <td><?php echo $totalFamily ?></td>
                                <td><?php echo round($familyPercentage).'%' ?></td>
                                <td><?php echo $totalPeers ?></td>
                                <td><?php echo round($peerPercentage).'%' ?></td>
                                <td><?php echo $totalRelationship ?></td>
                                <td><?php echo round($relationshipPercentage).'%' ?></td>
                                <td><?php echo $totalEmotion ?></td>
                                <td><?php echo round($emotionPercentage).'%' ?></td>
                                <td><?php echo $adss == 'All' ? 'All'  :$adss[0]['admin_fname'] ?></td>
                              </tr> -->
                              <!-- <td><?php echo $this->uri->segment(6) ?></td>
                                <td><?php echo str_replace("-", " ", $this->uri->segment(8)) ?></td>
                                <td><?php echo str_replace("-", " ", $this->uri->segment(7)) ?></td> -->
                                <!-- <td><?php echo $studs == 'All' ? 'All' : $studs[0]['user_fname'] ?></td> -->
                          </tbody>
                      </table>
              </div>
                
            </div>
        </div>
    </div>
</div>
 

