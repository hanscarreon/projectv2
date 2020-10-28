
<style>
.error {
    color: #5a5c69;
    font-size: 1rem!important;
    position: relative;
    line-height: 1;
    width: 12.5rem;
}
</style>
<div class="card card-primary card-outline mb-5">
    <div class="card-body box-profile">
    <div class="text-center">
        <!-- <img class="profile-admin-img img-fluid img-circle" src="<?php echo base_url().$profile[0]['admin_pic'] ?>" alt="no profile picture available"> -->
        <!-- <form method="post" class="mb-5" enctype="multipart/form-data">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="number" value="<?php echo $profile[0]['admin_id'] ?>" name="admin_id" id="admin_id">
                            <input type="file" class="custom-file-input" id="admin_pic" name="admin_pic" >
                            <label class="custom-file-label" for="">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" value="upload_file" name="upload_file" id="">upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> -->
    </div>
    <form class="form-horizontal" id="account-form" method="post">
        
          <div class="form-group row">
                <label for="admin_uname" class="col-sm-2 col-form-label">Username *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="admin_uname" name="admin_uname" placeholder="Username" value="">
                    <div class="input-group-append">
                    </div>
                </div>
                </div>
            </div>
            <!-- /. username -->
            <div class="form-group row">
                <label for="admin_email" class="col-sm-2 col-form-label">Email *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="Email" value="">
                    <div class="input-group-append">
                    <button type="button" class="input-group-text" data-target="admin_email" ><i class="fas fa-at"></i></i></button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /. email -->
            <div class="form-group row">
                <label for="admin_fname" class="col-sm-2 col-form-label">Full name *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="admin_fname" name="admin_fname" placeholder="Full Name" value="">
                    <div class="input-group-append">
                    </div>
                </div>
                </div>
            </div>
            <!-- /. first name -->
            <div class="form-group row">
                <label for="admin_pass" class="col-sm-2 col-form-label"> Password *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="password" class="form-control"  id="admin_pass" name="admin_pass" placeholder="Password">
                    <div class="input-group-append">
                    <button type="button" class="input-group-text"  onclick="toogle_pass(this.getAttribute('data-target'))" data-target="admin_pass" ><i class="far fa-eye"></i></button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /. password -->
            <div class="form-group row">
                <label for="admin_pass2" class="col-sm-2 col-form-label">Confirm Password *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="admin_pass2" name="admin_pass2" placeholder="Password" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button type="button" class="input-group-text"  onclick="toogle_pass(this.getAttribute('data-target'))" data-target="admin_pass2" > <i class="far fa-eye"></i></button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /. confirm password -->
            <div class="form-group row">
                <label for="admin_gender" class="col-sm-2 col-form-label">Gender <small>(optional)</small> </label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" name="admin_gender" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                    <option value="">Select ...</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="lqbtq">LBTQ</option>
                    </select>
                    <div class="input-group-append">
                    </div>
                </div>
                </div>
            </div>
            <!-- /. gender  -->
            <div class="form-group row">
                <label for="admin_role" class="col-sm-2 col-form-label">Role *</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="admin_role" name="admin_role" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="">Select Role</option>
                    <option value="guidance">Guidance counselor</option>
                    <option value="admin">Admin</option>
                    </select>
                    <div class="input-group-append">
                    
                    </div>
                </div>
                </div>
            </div>
            <!-- /. Role  -->
            <div class="form-group row">
                <label for="admin_expertise" class="col-sm-2 col-form-label">Expertise</label>
                <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="admin_expertise" name="admin_expertise" placeholder="Expertise" aria-describedby="basic-addon2">
                </div>
                </div>
            </div>
   
     
      
    
    
        <!-- /. address -->
        <br>
        <button type="submit" type="button" value="update_account" name="update_account" class="btn btn-primary ">save</button>

        
       
    </form>

    
    </div>
    <!-- /.card-body -->
</div>
<script type="text/javascript">
    function toogle_pass(id){
      console.log("test")
       $('button[data-target="'+id+'"]').find('i').toggleClass("fas fa-eye-slash");
        var input = $("#"+id);
        if(input.attr("type") == 'password'){
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
    }
</script>




