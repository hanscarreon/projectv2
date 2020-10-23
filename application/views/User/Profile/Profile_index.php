<div class="card card-primary card-outline">
    <div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
    </div>
    <form class="form-horizontal" id="account-form" method="post">

        <div class="form-group row">
            <label for="user_name" class="col-sm-2 col-form-label">Username *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" value="">
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
                <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email" value="">
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
                <input type="text" class="form-control" id="user_fname" name="Full Name" placeholder="Full Name" value="">
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. first name -->
        <div class="form-group row">
            <label for="user_pass" class="col-sm-2 col-form-label"> Password *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="password" class="form-control"  id="user_pass" name="user_pass" placeholder="Password">
                <div class="input-group-append">
                <button type="button" class="input-group-text"  onclick="toogle_pass(this.getAttribute('data-target'))" data-target="user_pass" ><i class="far fa-eye"></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /. password -->
        <div class="form-group row">
            <label for="user_pass2" class="col-sm-2 col-form-label">Confirm Password *</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="user_pass2" name="user_pass2" placeholder="Password" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <button type="button" class="input-group-text"  onclick="toogle_pass(this.getAttribute('data-target'))" data-target="user_pass2" > <i class="far fa-eye"></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /. confirm password -->

        <div class="form-group row">
        <label for="user_pos" class="col-sm-2 col-form-label">Curriculum *</label>
        <div class="err col-sm-10">
        <div class="input-group mb-3">
            <select class="form-control select2 select2-hidden-accessible" name="user_pos" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Select Curriculum Level</option>
            <option value="GRADUATE ">GRADUATE   SCHOOL</option>
            <option value="LAW">LAW  SCHOOL</option>
            <option value="COLLEGE">SENIOR  COLLEGE</option>
            <option value="SENIOR HIGHSCHOOL">SENIOR  HIGHSCHOOL</option>
            <option value="JUNIOR HIGHSCHOOL">JUNIOR  HIGHSCHOOL</option>
            <option value="ELEMENTARY SCHOOL">ELEMENTARY SCHOOL</option>
            </select>
            </div>
        </div>
        </div>
        <!-- /. curiculum  -->
        <div class="form-group row">
        <label for="user_strand" class="col-sm-2 col-form-label">Curriculum *</label>
        <div class="err col-sm-10">
        <div class="input-group mb-3">
            <select class="form-control select2 select2-hidden-accessible" name="user_strand" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Strand/Degree Program</option>
            <option value="SHS">SHS</option>
            <option value="Higher Education">Higher Education</option>
            </select>
            </div>
        </div>
        </div>
        <!-- /. curiculum  -->
        <div class="form-group row">
            <label for="user_fname" class="col-sm-2 col-form-label">Year/Section</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_fname" name="user_section" placeholder="Year/Section" value="">
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. Year/Section -->
        <div class="form-group row">
            <label for="user_fname" class="col-sm-2 col-form-label">Contact #</label>
            <div class="err col-sm-10">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="Contact #:" value="">
                <div class="input-group-append">
                </div>
            </div>
            </div>
        </div>
        <!-- /. Year/Section -->
        <button type="submit" value="create_account" name="create_account" class="btn btn-primary ">edit</button>
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

