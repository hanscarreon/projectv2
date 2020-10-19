<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Create Sentiment</h6>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">

  	           		 	 <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Email *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="email" class="form-control" disabled=""  id="user_email" name="user_email" value="" >
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
                              <input type="text" class="form-control" disabled="" id="user_name" name="user_name" value="" >
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
                              <input type="text" class="form-control"  id="user_fname" name="user_fname" value="" >
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
                              <input type="text" class="form-control"  id="user_mname" name="user_mname" value="" >
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
                              <input type="text" class="form-control"  id="user_lname" name="user_lname" value="" >
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
                              <input type="date" class="form-control"  id="user_bod" name="user_bod" value="" >
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
                              <input type="text" class="form-control"  id="user_address" name="user_address" value="" >
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
                            <select class="form-control select2 select2-hidden-accessible" id="user_gender" name="user_gender" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                              <option value="">Select ...</option>
                              <option value="male">male</option>
                              <option value="female">female</option>
                            </select>
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
                            <select class="form-control select2 select2-hidden-accessible" id="user_pos" name="user_pos" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                              <option value="">Select ...</option>
                              <option value="col">College</option>
                              <option value="hs">High School</option>
                              <option value="elem">Elementary School</option>
                            </select>
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
                            <select class="form-control select2 select2-hidden-accessible" name="user_yr" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                              <option value="">Select ...</option>
                              <option value="1">1st yr</option>
                              <option value="2">2nd yr</option>
                              <option value="3">3rd yr</option>
                              <option value="4">4th yr</option>
                              <option value="5">5th yr</option>
                              <option value="6">6th yr</option>
                            </select>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. yr level -->
                         <div class="card-footer text-center">
	                        <button type="submit" value="update_profile" name="update_profile" class="btn btn-primary ">Submit</button>
	                     </div>
	                      <!-- /.card-footer -->
              </form>

	            	</div>
	            <!-- /. card body -->
	          </div>
	          <!-- /. card shadow -->
	        </div> 
	        <!-- /. row -->
</div>
<!-- /.container-fluid -->