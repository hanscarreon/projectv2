<div class="card card-primary card-outline mb-5">
    <div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-admin-img img-fluid img-circle" src="<?php echo base_url().$profile[0]['admin_pic'] ?>" alt="no profile picture available">
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
                    <input type="text" class="form-control" id="admin_uname" name="admin_uname" placeholder="admin name" value="<?php echo $profile[0]['admin_uname'] ?>" disabled >
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
        </div>
        <!-- /. adminname -->
        <div class="form-group row">
            <label for="admin_email" class="col-sm-2 col-form-label">Email *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="Email" value="<?php echo $profile[0]['admin_email'] ?>" disabled>
                <div class="input-group-append">
                <button type="button" class="input-group-text" data-target="admin_email" ><i class="fas fa-at"></i></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /. email -->
        <div class="form-group row">
            <label for="admin_fname" class="col-sm-2 col-form-label">Name *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="admin_fname" name="admin_fname" placeholder="Full Name" value="<?php echo $profile[0]['admin_fname'] ?>" >
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. first name -->
         <div class="form-group row">
            <label for="admin_expertise" class="col-sm-2 col-form-label">Expertise:</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="admin_expertise" name="admin_expertise"  value="<?php echo $profile[0]['admin_expertise'] ?>" >
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. expertise -->
        <div class="form-group row">
            <label for="admin_gender" class="col-sm-2 col-form-label">Gender *</label>
            <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="admin_gender" name="admin_gender"  style="width: 100%;"  data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="">Select gender</option>
                    <option value="male" <?php echo $profile[0]['admin_gender'] == 'male' ? 'selected':'' ?>>male</option>
                    <option value="female" <?php echo $profile[0]['admin_gender'] == 'female' ? 'selected':'' ?>>female</option>
                    <option value="lgbtq"  <?php echo $profile[0]['admin_gender'] == 'lgbtq' ? 'selected':'' ?> >lgbtq</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /. gender  -->
        <div class="form-group row">
            <label for="admin_address" class="col-sm-2 col-form-label">Address *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="admin_address" name="admin_address" placeholder="address " value="<?php echo $profile[0]['admin_address'] ?>"  >
                <div class="input-group-append">
                </div>
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
       $('button[data-target="'+id+'"]').find('i').toggleClass("fas fa-eye-slash");
        var input = $("#"+id);
        if(input.attr("type") == 'password'){
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
    }
</script>

