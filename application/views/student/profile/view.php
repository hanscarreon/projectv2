<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Profile Info</h6>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">

                        <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Email *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="email" class="form-control" disabled="" id="user_email" name="user_email" value="<?php echo ($profile[0]['user_email']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. email Name -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">User Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_name" name="user_name" value="<?php echo ($profile[0]['user_name']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. user Name -->
                        <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">First Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_fname" name="user_fname" value="<?php echo ucfirst($profile[0]['user_fname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. First Name -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Middle Name </label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_mname" name="user_mname" value="<?php echo ucfirst($profile[0]['user_mname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. Middle Name -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Last Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_lname" name="user_lname" value="<?php echo ucfirst($profile[0]['user_lname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. Last Name -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Birth Date *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_bod" name="user_bod" value="<?php echo date("d-m-Y",strtotime($profile[0]['user_bod'])) ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. birth date -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Address *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_lname" name="user_lname" value="<?php echo $profile[0]['user_address'] ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. address -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Gender </label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_gender" name="user_gender" value="<?php echo $profile[0]['user_gender'] ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. user_gender -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Curiculum </label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                            <!-- (variable === 1) ? 'foo' : ((variable === 2) ? 'bar' : 'baz') -->
                              <input type="text" class="form-control" disabled="" id="user_gender" name="user_gender" value="<?php echo $profile[0]['user_pos'] == 'col'?  'College' :  ($profile[0]['user_pos'] == 'hs'? 'High School' :'Elementary') ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. curiculum -->
                      <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Year Level </label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                            <!-- (variable === 1) ? 'foo' : ((variable === 2) ? 'bar' : 'baz') -->
                              <input type="text" class="form-control" disabled="" id="user_gender" name="user_gender" value="<?php echo $profile[0]['user_yr']  ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. yr level -->

                         <div class="card-footer text-right">
	                        <a href="<?php echo base_url() ?>student/profile/edit/<?php echo $this->session->userdata("user_id") ?>" class="btn btn-info ">edit</a>
	                     </div>
	                      <!-- /.card-footer -->
	            	</div>
	      		  </form>
	            <!-- /. card body -->
	          </div>
	          <!-- /. card shadow -->
	        </div> 
	        <!-- /. row -->
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
	

</script>