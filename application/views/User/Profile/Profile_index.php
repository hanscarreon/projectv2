<div class="card card-primary card-outline">
    <div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle " height="auto" width="20%" src="<?php echo !empty($profile[0]['user_pic']) ? base_url().$profile[0]['user_pic']: base_url('resources/img/stud.png') ?>" alt="no profile picture available">
        <form method="post" class="mb-5" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-2 col-0">
                </div>
                <div class="col-sm-10 col-12">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="number" value="<?php echo $profile[0]['user_id'] ?>" name="user_id" id="user_id">
                            <input type="file" class="custom-file-input" id="user_pic" name="user_pic" >
                            <label class="custom-file-label" for="">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" value="upload_file" name="upload_file" id="">upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <form class="form-horizontal" id="account-form" method="post">

        <div class="form-group row">
            <label for="user_name" class="col-sm-2 col-form-label">Username *</label>
            <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" value="<?php echo $profile[0]['user_name'] ?>" disabled>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
        </div>
        <!-- /. username -->
        <div class="form-group row">
            <label for="user_email" class="col-sm-2 col-form-label">Email *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email" value="<?php echo $profile[0]['user_email'] ?>" disabled>
                <div class="input-group-append">
                <button type="button" class="input-group-text" data-target="user_email" ><i class="fas fa-at"></i></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /. email -->
        <div class="form-group row">
            <label for="user_fname" class="col-sm-2 col-form-label">Name *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_fname" name="Full Name" placeholder="Full Name" value="<?php echo $profile[0]['user_fname'] ?>" disabled>
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. first name -->
        <div class="form-group row">
            <label for="user_address" class="col-sm-2 col-form-label">Address *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Full Name" value="<?php echo $profile[0]['user_address'] ?>" disabled >
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. address -->
        <div class="form-group row">
            <label for="user_bod" class="col-sm-2 col-form-label">Birth Date *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="date" class="form-control" id="user_bod" name="user_bod"  value="<?php echo $profile[0]['user_bod'] ?>"  disabled>
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. bod -->
        <div class="form-group row">
        <label for="user_pos" class="col-sm-2 col-form-label">Division *</label>
        <div class="err col-sm-10">
        <div class="input-group mb-3">
            <select class="form-control select2 select2-hidden-accessible" name="user_pos" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" disabled>
            <option value="">Select Curriculum Level</option>
            <option value="GRADUATE"<?php echo $profile[0]['user_division'] == 'graduate' ? 'selected':'' ?> >GRADUATE</option>
            <option value="LAW"<?php echo $profile[0]['user_division'] == 'law school' ? 'selected':'' ?>>LAW  SCHOOL</option>
            <option value="COLLEGE" <?php echo $profile[0]['user_division'] == 'college' ? 'selected':'' ?>>COLLEGE</option>
            <option value="SENIOR HIGHSCHOOL" <?php echo $profile[0]['user_division'] == 'senior highschool' ? 'selected':'' ?>>SENIOR  HIGHSCHOOL</option>
            <option value="JUNIOR HIGHSCHOOL" <?php echo $profile[0]['user_division'] == 'junior highschool' ? 'selected':'' ?> >JUNIOR  HIGHSCHOOL</option>
            <option value="ELEMENTARY SCHOOL">ELEMENTARY SCHOOL</option>
            </select>
            </div>
        </div>
        </div>
        <!-- /. Division  -->
        <div class="form-group row">
            <label for="user_degree" class="col-sm-2 col-form-label">Degree *</label>
            <div class="err col-sm-10">
                <div class="input-group mb-3">
                 <input type="text" disabled class="form-control" id="user_degree" name="user_degree"  value="<?php echo $profile[0]['user_degree'] ?>" >
                </div>
            </div>
        </div>
        <!-- /. degree  -->
        <div class="form-group row">
            <label for="user_gender" class="col-sm-2 col-form-label">Gender *</label>
            <div class="err col-sm-10">
                <div class="input-group mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="user_gender" name="user_gender"  style="width: 100%;" disabled data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="">select gender</option>
                    <option value="male" <?php echo $profile[0]['user_gender'] == 'male' ? 'selected':'' ?>>male</option>
                    <option value="female" <?php echo $profile[0]['user_gender'] == 'female' ? 'selected':'' ?>>female</option>
                    <option value="lgbtq"  <?php echo $profile[0]['user_gender'] == 'lgbtq' ? 'selected':'' ?> >lgbtq</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /. gender  -->
        <div class="form-group row">
            <label for="user_section" class="col-sm-2 col-form-label">Year/Section</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_section" name="user_section" placeholder="Year/Section" value="<?php echo $profile[0]['user_section'] ?>" disabled>
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
                <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="Contact #:" value="<?php echo $profile[0]['user_contact'] ?>" disabled>
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. Year/Section -->
        <a href="<?php echo base_url('user/profile/edit/'). $profile[0]['user_id'] ?>" type="button" class="btn btn-primary ">edit</a>
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

