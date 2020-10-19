<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Create Sentiment</h6>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">
                    <div class="form-group row">
                        <label for="case_text" class="col-sm-2 col-form-label">Write your concern<i style="color:red;">*</i></label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                            <textarea  rows="4" cols="50" class="form-control" id="case_text" name="case_text" placeholder="Enter your text here"></textarea> <!-- type="text"  value=""> -->
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. case text -->
                      <div class="form-group row">
                        <label for="case_cause" class="col-sm-2 col-form-label">Counseling reasons<i style="color:red;">*</i></label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                            <select class="form-control select2 select2-hidden-accessible" id="case_cause" name="case_cause" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="">Select reason..</option>
                            <option value="academic">academic</option>
                            <option value="family">family</option>
                            <option value="peers">peers</option>
                            <option value="relationship">relationship</option>
                            <option value="emotions">emotions</option>
                            <option value="emotions">emotions</option>
                            </select>
                            </div>
                          </div>
                      </div>
                      <!-- /.reasons -->
                      <div class="form-group row">
                          <label for="case_res" class="col-sm-2 col-form-label">Response prepared via<i style="color:red;">*</i></label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <select class="form-control select2 select2-hidden-accessible" id="case_res" name="case_res" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                              <option value="">Select reason..</option>
                              <option value="email">email</option>
                              <option value="zoom">zoom</option>
                              <option value="sms">SMS</option>
                              </select>
                              </div>
                            </div>
                      </div>
                        <!-- /. curiculum  -->
                        <!-- /. curiculum  -->
                         <div class="card-footer text-center">
	                        <button type="submit" value="create_account" name="create_account" class="btn btn-primary">Submit</button>
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