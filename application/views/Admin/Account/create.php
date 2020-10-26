

<!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
             <div class="col-12 card shadow mb-4">
              <div class="p-3 py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Account</h6>
              </div>
              <div class="card-body">
                  <!-- form start -->
                    <form class="form-horizontal" id="account-form" method="post">
                      <div class="card-body">

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
                          <label for="user_fname" class="col-sm-2 col-form-label">First name *</label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="First Name" value="">
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. first name -->
                        <div class="form-group row">
                          <label for="user_mname" class="col-sm-2 col-form-label">Middle name  <small>(optional)</small></label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" id="user_mname" name="user_mname" placeholder="Middle Name" value="">
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. middle name -->
                        <div class="form-group row">
                          <label for="user_lname" class="col-sm-2 col-form-label">Last name *</label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" id="user_lname" name="user_lname" placeholder="Last Name" value="">
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. Last name -->
                         <div class="form-group row">
                          <label for="user_address" class="col-sm-2 col-form-label">Address <small>(optional)</small></label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" id="user_lname" name="user_address" placeholder="Last Name" value="">
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. Address -->
                        <div class="form-group row">
                          <label for="user_bod" class="col-sm-2 col-form-label">Birth Date <small>(optional)</small></label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <input type="date" class="form-control" id="user_bod" name="user_bod" placeholder="Last Name" value="">
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. birth date -->
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
                          <label for="user_gender" class="col-sm-2 col-form-label">Gender <small>(optional)</small> </label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <select class="form-control select2 select2-hidden-accessible" name="user_gender" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                              <option value="">Select ...</option>
                              <option value="male">male</option>
                              <option value="female">female</option>
                              </select>
                              <div class="input-group-append">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. gender  -->
                        <div class="form-group row">
                          <label for="user_role" class="col-sm-2 col-form-label">Role *</label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <select class="form-control select2 select2-hidden-accessible" name="user_role" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                              <option value="">Select Role</option>
                              <option value="admin">Guidance counselor</option>
                              <option value="student">Student</option>
                              </select>
                              <div class="input-group-append">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. Role  -->
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
                          <label for="user_yr" class="col-sm-2 col-form-label">Year Level <small>(optional)</small></label>
                          <div class="err col-sm-10">
                            <div class="input-group mb-3">
                              <select class="form-control select2 select2-hidden-accessible" name="user_yr" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                              <option value="">Select ...</option>
                              <option value="1">1st</option>
                              <option value="2">2nd</option>
                              <option value="3">3rd</option>
                              <option value="4">4th</option>
                              <option value="5">5th</option>
                              <option value="6">6th</option>
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /. curiculum  -->
                        </div>

                      <div class="card-footer text-right">
                        <button type="submit" value="create_account" name="create_account" class="btn btn-info ">Submit</button>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                    <!-- /. form -->

                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div> 
          <!-- /. row -->
        </div>
        <!-- /.container-fluid -->

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

<!-- validation -->
<script>


$(document).ready(function () {



// jQuery.validator.addMethod("tindahans.com", function(value, element) {
//   return this.optional(element) || /^https:\/\/tindahans.com/.test(value);
// }, "Please specify the correct domain for your documents");

$.validator.addMethod("domain", function(value, element) {
    var re = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    if (re.test(value)) {
        if ((value.indexOf("@my.jru.edu", value.length - "@my.jru.edu".length) !== -1) ||( value.indexOf("@jru.edu", value.length - "@jru.edu".length) !== -1)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}, "Your email address is not valid.");

  $.validator.setDefaults({
    submitHandler: function (form) {
      $(form).submit();
    }
  });
  $('#account-form').validate({
    rules: {
      user_name: {
        required: true,
        minlength: 6,
      },
      user_email:{
        required:true,
        domain: true,
      },
      user_fname:{
        required : true,
        minlength: 2,
      },
      user_lname:{
        required : true,
        minlength: 2,
      },
      user_pass: {
        required: true,
        minlength: 6,
      },
      user_pass2 :{
          required: true,
          minlength : 6,
          equalTo : "#user_pass"
      },
      user_role:{
        required:true
      },
      user_pos:{
        required:true
      }
    },
    messages: {
      user_name: {
        required: "Please enter a username ",
        minlength:'Your username must be at least 6 characters long'
      },
      user_email: {
        required: "Please enter a email ",
        email:'invalid email',
        domain:'Please enter only my.jru.edu or jru.edu email',
      },
      user_fname:{
        required : 'Please your first name here',
        minlength: 'Invalid min character of name'
      },
      user_lname:{
        required : 'Please your first name here',
        minlength: 'Invalid min character of name'
      },
      user_pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      user_pass2: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        equalTo:"Password not match"
      },
      user_role:{
        required:'Please select user role'
      },
      user_pos:{
        required:'Please select Curriculum'
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.err').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


