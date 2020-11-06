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
    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>resources/img/perficon.png" style="height: auto;width: 50px;"> </a>
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
                <h2 class="">Student Registration Form  </h2>
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
                    <label for="user_fname" class="col-sm-2 col-form-label">Full Name *</label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="Full Name" value="">
                        <div class="input-group-append">
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /. Full name -->
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
                    <label for="user_contact" class="col-sm-2 col-form-label">Contact # <small>*</small></label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="user_contact" name="user_contact" placeholder="Contact #" value="">
                        <div class="input-group-append">
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /. Contact -->
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
                        <option value="male">Male</option>
                        <option value="female">Femal</option>
                        <option value="lgbtq">LGBTQ</option>
                        </select>
                        <div class="input-group-append">
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /. gender  -->
                <div class="form-group row">
                    <label for="user_division" class="col-sm-2 col-form-label">Division *</label>
                    <div class="err col-sm-10">
                    <div class="input-group mb-3">
                        <select class="form-control select2 select2-hidden-accessible" id="user_division" name="user_division" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="">Select Curriculum Level</option>
                        <option value="elementary school">Elementary Highschool</option>
                        <option value="junior highschool">Junior Highschool</option>
                        <option value="senior highschool">Senior Highschool</option>
                        <option value="college">College</option>
                        <option value="law school">Law School</option>
                        <option value="graduate">Graduate</option>
                        </select>
                        </div>
                    </div>
                  </div>
                <!-- /. curiculum  -->
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

     




<!-- Bootstrap 4 jquery -->
<script src="<?php echo base_url() ?>resources/newui-cdn/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>resources/newui-cdn/js/popper.min.js" ></script>
<script src="<?php echo base_url() ?>resources/newui-cdn/js/bootstrap.min.js" ></script>

<!-- Toastr -->
<script src="<?php echo base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- jquery mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<script type="text/javascript">
function testss(){
  console.log("rte")
  var settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://microsoft-text-analytics1.p.rapidapi.com/sentiment",
	"method": "POST",
	"headers": {
		"x-rapidapi-host": "microsoft-text-analytics1.p.rapidapi.com",
		"x-rapidapi-key": "6db84a91bamsh3c9e7e9bcee897cp145162jsne1bf89f9e4e0",
		"content-type": "application/json",
		"accept": "application/json"
	},
	"processData": false,
	"data":{"documents":[
    {   "id": "1",   "language": "en",   "text": "Hello world. This is some input text that I love."  },  {   "id": "2",   "language": "en",   "text": "It's incredibly sunny outside! I'm so happy."  },  {   "id": "3",   "language": "en",   "text": "Pike place market is my favorite Seattle attraction."  }
  ]}
}

$.ajax(settings).done(function (response) {
	console.log(response);
});
}
    function toogle_pass(id){
      testss();
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
  $('#user_name').mask('00-000000');


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
        minlength: 7,
      },
      user_email:{
        required:true,
        domain: true,
      },
      user_fname:{
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
