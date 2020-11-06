<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
                <h6 class="m-0 font-weight-bold text-primary">info Info</h6>
                <div class="text-center">
                  <img class="info-admin-img img-fluid img-circle" height="auto" width="30%" src="<?php echo !empty($info[0]['admin_pic']) ? base_url().$info[0]['admin_pic'] :  base_url('resources/img/stud.png') ?>" alt="no info picture available">
                </div>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">

                        <div class="form-group row">
                        <label for="user_email" class="col-sm-2 col-form-label">Email *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="email" class="form-control" disabled="" id="user_email" name="user_email" value="<?php echo ($info[0]['user_email']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. email Name -->
                      <div class="form-group row">
                        <label for="user_name" class="col-sm-2 col-form-label">User Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" disabled="" id="user_name" name="user_name" value="<?php echo ($info[0]['user_name']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. user Name -->
                        <div class="form-group row">
                        <label for="user_fname" class="col-sm-2 col-form-label">First Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control"  id="user_fname" name="user_fname" value="<?php echo ucfirst($info[0]['user_fname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. First Name -->
                      <div class="form-group row">
                        <label for="user_address" class="col-sm-2 col-form-label">Address *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control"  id="user_address" name="user_address" value="<?php echo$info[0]['user_address'] ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. address -->
                      <div class="form-group row">
                          <label for="user_division" class="col-sm-2 col-form-label">Division *</label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <select class="form-control select2 select2-hidden-accessible" name="user_division" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" >
                                <option value="">Select Curriculum Level</option>
                                <option value="graduate"<?php echo $info[0]['user_division'] == 'graduate' ? 'selected':'' ?> >GRADUATE</option>
                                <option value="law school"<?php echo $info[0]['user_division'] == 'law school' ? 'selected':'' ?>>LAW  SCHOOL</option>
                                <option value="collage" <?php echo $info[0]['user_division'] == 'college' ? 'selected':'' ?>>COLLEGE</option>
                                <option value="senior highschool" <?php echo $info[0]['user_division'] == 'senior highschool' ? 'selected':'' ?>>SENIOR  HIGHSCHOOL</option>
                                <option value="junior highschool" <?php echo $info[0]['user_division'] == 'junior highschool' ? 'selected':'' ?> >JUNIOR  HIGHSCHOOL</option>
                                <option value="elementary school" <?php echo $info[0]['user_division'] == 'elementary school' ? 'selected':'' ?> >ELEMENTARY SCHOOL</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      <!-- /. Division -->
                      <div class="form-group row">
                            <label for="user_degree" class="col-sm-2 col-form-label">Strands/Degree Program  *</label>
                            <div class="err col-sm-10">
                                <div class="input-group mb-3">
                                <input type="text"  class="form-control" id="user_degree" name="user_degree" placeholder="For SHS and Higher Education"  value="<?php echo $info[0]['user_degree'] ?>" >
                                </div>
                            </div>
                       </div>
                        <!-- /. degree  -->
                        <div class="form-group row">
                            <label for="user_gender" class="col-sm-2 col-form-label">Gender *</label>
                            <div class="err col-sm-10">
                                <div class="input-group mb-3">
                                    <select class="form-control select2 select2-hidden-accessible" id="user_gender" name="user_gender"  style="width: 100%;"  data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="">select gender</option>
                                    <option value="male" <?php echo $info[0]['user_gender'] == 'male' ? 'selected':'' ?>>male</option>
                                    <option value="female" <?php echo $info[0]['user_gender'] == 'female' ? 'selected':'' ?>>female</option>
                                    <option value="lgbtq"  <?php echo $info[0]['user_gender'] == 'lgbtq' ? 'selected':'' ?> >lgbtq</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /. gender  -->
                        <div class="form-group row">
                            <label for="user_section" class="col-sm-2 col-form-label">Year/Section</label>
                            <div class="err col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="user_section" name="user_section" placeholder="Year/Section" value="<?php echo $info[0]['user_section'] ?>" >
                                <div class="input-group-append">
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /. Year/Section -->
                        <div class="form-group row">
                            <label for="user_contact" class="col-sm-2 col-form-label">Contact #</label>
                            <div class="err col-sm-10">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="Contact #:" value="<?php echo $info[0]['user_contact'] ?>" >
                                <div class="input-group-append">
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /. Year/Section -->

                        <div class="form-group row">
                            <label for="user_status" class="col-sm-2 col-form-label">Status *</label>
                            <div class="err col-sm-10">
                                <div class="input-group mb-3">
                                    <select class="form-control select2 select2-hidden-accessible" id="user_status" name="user_status"  style="width: 100%;"  data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="">select gender</option>
                                    <option value="published" <?php echo $info[0]['user_status'] == 'published' ? 'selected':'' ?>>Active</option>
                                    <option value="draft" <?php echo $info[0]['user_status'] == 'draft' ? 'selected':'' ?>>Draft</option>
                                    <option value="deleted"  <?php echo $info[0]['user_status'] == 'deleted' ? 'selected':'' ?> >Deactivate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /. user_status  -->

                    
                      <button class="btn btn-primary text-white" name="save_student" value="save_student" type="submit">Save</button>
                
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