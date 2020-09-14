<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register | GMSUSAPP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/carousel.css" >
  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/colors.css" >
</head>
<body class="hold-transition login-page">

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color-dark-blue">
    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>resources/img/logos.png" style="height: auto;width: 50px;"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url() ?>">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About </a>
        </li>
      </ul>
        <a style="cursor:pointer" class=" my-2 my-sm-0 " href="<?php echo base_url('register') ?>" >Register</a>
    </div>
  </nav>
</header>

<!-- header end -->


<div class="container">

  <!-- Three columns of text below the carousel -->
        <div id="forms-box" class="card-body mt-3" style="background: #f7f7f7;"> 
            <div class="card-title text-center">
                <h2 class="">Student Registration Form</h2>
            </div>

            <!-- form start -->
            <form class="form-horizontal" id="account-form" method="post">
                <div class="card-body">
                
                <div class="form-group row">
                    <label for="user_name" class="col-sm-2 col-form-label">Username *</label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="00-0000000" value="">
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
                    <label for="user_mname" class="col-sm-2 col-form-label">Middle name </label>
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
                    <label for="user_address" class="col-sm-2 col-form-label">Address <small>*</small></label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="user_lname" name="user_address" placeholder="Address" value="">
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
                    <label for="user_pos" class="col-sm-2 col-form-label">Curriculum *</label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <select class="form-control select2 select2-hidden-accessible" name="user_pos" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="">Select Curriculum Level</option>
                        <option value="col">College Student</option>
                        <option value="hs">Secondary Student / Grade Student</option>
                        <option value="elem">Elementary Student / Grade Student</option>
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
                <button type="submit"  class="btn btn-info ">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
            <!-- /. form -->

        </div>
        <!-- /.card-body -->

<div class="modal fade" id="loader" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
          <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
      </div>
      
    </div>
  </div>
</div>

     


<!-- Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<!-- Toastr -->
<script src="<?php echo base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- jquery mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


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
  $('#user_name').mask('00-0000000');


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

jQuery.validator.addMethod("passwordCheck",
        function(value, element, param) {
            if (/[A-Z]/.test(value)) {
                return true;
            } {
                return false;
            } 

            return true;
      },'password atleast one uppercase');  

  $.validator.setDefaults({
    submitHandler: function (form) {
        // loader();
        $(form).submit();
        // setTimeout(function(){},3000)
        
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
        passwordCheck:true,
      },
      user_pass2 :{
          required: true,
          minlength : 6,
          equalTo : "#user_pass",
          passwordCheck:true,

      },
      user_role:{
        required:true
      },
      user_pos:{
        required:true
      },
      user_yr:{
        required:true
      },
      user_gender:{
        required:true
      },
      user_address:{
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
        minlength: "Your password must be at least 6 characters long",
        passwordCheck:"password atleast one uppercase",

      },
      user_pass2: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        equalTo:"Password not match",
        passwordCheck:"password atleast one uppercase",

      },
      user_role:{
        required:'Please select user role'
      },
      user_pos:{
        required:'Please select Curriculum'
      },
      user_yr:{
        required:"Please select Year/Grade level"
      },
      user_gender:{
        required:"Please select gender"
      },
      user_address:{
          required:'Provide address'
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
  function loader(){
    $("#loader").modal('toggle');
  }
});
</script>

</body>
</html>
