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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/carousel.css" >
  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/colors.css" >
</head>
<body class="hold-transition login-page">

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color-dark-blue">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About </a>
        </li>
      </ul>
        <a style="cursor:pointer" class="d-block my-2 my-sm-0 mr-2"  data-toggle="modal" data-target="#login-modal">Login</a>
        <a style="cursor:pointer" class=" my-2 my-sm-0 " href="<?php echo base_url('register') ?>" >Register</a>
    </div>
  </nav>
</header>

<!-- header end -->


<div class="container">

  <!-- Three columns of text below the carousel -->
        <div class="card-body mt-3" style="background: #f7f7f7;"> 
            <div class="card-title text-center">
                <h2 class="">Forgot Password</h2>
            </div>
            <!-- form start -->
            <form class="form-horizontal" id="account-form" method="post">
                <div class="card-body">
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
                <div class="card-footer text-right">
                <button type="submit"  class="btn btn-info ">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
            <!-- /. form -->

        </div>
        <!-- /.card-body -->



  

     


<!-- jQuery -->
<script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Toastr -->
<script src="<?php echo base_url(); ?>plugins/toastr/toastr.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-validation/additional-methods.min.js"></script>


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
      user_email:{
        required:true,
        // domain: true,
      }
    },
    messages: {
      user_email: {
        required: "Please enter a email ",
        email:'invalid email',
        // domain:'Please enter only my.jru.edu or jru.edu email',
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

</body>
</html>
