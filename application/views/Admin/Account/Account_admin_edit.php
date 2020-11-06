<div class="container-fluid">
        	<div class="row">

	          <div class="col-12 card shadow mb-4">
	            <div class="p-3 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Info</h6>
                <div class="text-center">
                  <img class="profile-admin-img img-fluid img-circle" height="auto" width="30%" src="<?php echo !empty($info[0]['admin_pic']) ? base_url().$info[0]['admin_pic'] :  base_url('resources/img/stud.png') ?>" alt="no profile picture available">
                </div>
		             
	            </div>
	            <form class="form-horizontal" id="case-form" method="post">
	           		 <div class="card-body">

                        <div class="form-group row">
                        <label for="admin_email" class="col-sm-2 col-form-label">Email *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="email" class="form-control" disabled  id="admin_email" name="admin_email" value="<?php echo ($info[0]['admin_email']) ?>" name="">
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
                              <input type="text" class="form-control" disabled  id="user_name" name="user_name" value="<?php echo ($info[0]['admin_uname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. user Name -->
                        <div class="form-group row">
                        <label for="admin_fname" class="col-sm-2 col-form-label">First Name *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control"   id="admin_fname" name="admin_fname" value="<?php echo ucfirst($info[0]['admin_fname']) ?>" name="">
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. First Name -->
                      <div class="form-group row">
                        <label for="admin_address" class="col-sm-2 col-form-label">Address *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control"  id="admin_address" name="admin_address" value="<?php echo$info[0]['admin_address'] ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. address -->
                      <div class="form-group row">
                        <label for="admin_expertise" class="col-sm-2 col-form-label">Expertise *</label>
                        <div class="err col-sm-10">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control"  id="admin_expertise" name="admin_expertise" value="<?php echo$info[0]['admin_expertise'] ?>" >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /. expertise -->
                      <div class="form-group row">
                        <label for="admin_role" class="col-sm-2 col-form-label">Role *</label>
                        <div class="err col-sm-10">
                        <div class="input-group mb-3">
                            <select class="form-control select2 select2-hidden-accessible" id="admin_role" name="admin_role" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="">Select Role</option>
                            <option value="guidance" <?php echo $info[0]['admin_role'] == 'guidance' ? 'selected': ''  ?>>Guidance counselor</option>
                            <!-- <option value="admin" <?php echo $info[0]['admin_role'] == 'admin' ? 'selected': ''  ?> >Admin</option> -->
                            </select>
                            <div class="input-group-append">
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /. Role  -->
                    <div class="form-group row">
                        <label for="admin_gender" class="col-sm-2 col-form-label">Gender *</label>
                        <div class="err col-sm-10">
                        <div class="input-group mb-3">
                            <select class="form-control select2 select2-hidden-accessible"  id="admin_gender" name="admin_gender" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="">Select Role</option>
                            <option value="male" <?php echo $info[0]['admin_gender'] == 'male' ? 'selected': ''  ?>>male</option>
                            <option value="female" <?php echo $info[0]['admin_gender'] == 'female' ? 'selected': ''  ?> >female</option>
                            <option value="lqbtq" <?php echo $info[0]['admin_gender'] == 'lqbtq' ? 'selected': ''  ?> >LGBTQ</option>
                            </select>
                            <div class="input-group-append">
                            
                            </div>
                        </div>
                        </div>
                      </div>
                      <!-- /. gender -->
                      <div class="form-group row">
                        <label for="admin_status" class="col-sm-2 col-form-label">Status *</label>
                        <div class="err col-sm-10">
                        <div class="input-group mb-3">
                            <select class="form-control select2 select2-hidden-accessible"  id="admin_status" name="admin_status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="">Select </option>
                            <option value="published" <?php echo $info[0]['admin_status'] == 'published' ? 'selected': ''  ?>>Active</option>
                            <option value="draft" <?php echo $info[0]['admin_status'] == 'draft' ? 'selected': ''  ?> >Draft</option>
                            <option value="deleted" <?php echo $info[0]['admin_status'] == 'deleted' ? 'selected': ''  ?> >Deactivate</option>
                            </select>
                            <div class="input-group-append">
                            </div>
                        </div>
                        </div>
                      </div>
                      <!-- /. gender -->

                      <button type="submit" value="update_admin" name="update_admin" class="btn btn-primary" >Save</button>
                
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