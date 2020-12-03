
<!-- validation -->
<script>

$(document).ready(function () {

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
      admin_uname: {
        required: true,
        minlength: 6,
      },
      admin_email:{
        required:true,
        domain: true,
      },
      admin_fname:{
        required : true,
        minlength: 2,
      },
      admin_pass: {
        required: true,
        minlength: 6,
      },
      admin_pass2 :{
          required: true,
          minlength : 6,
          equalTo : "#admin_pass"
      },
      admin_role:{
        required:true
      },
      admin_expertise:{
        required:true
      }
    },
    messages: {
        admin_uname: {
        required: "Please enter a username ",
        minlength:'Your username must be at least 6 characters long'
      },
      admin_email: {
        required: "Please enter a email ",
        email:'invalid email',
        domain:'Please enter only my.jru.edu or jru.edu email',
      },
      admin_fname:{
        required : 'Please your full name here',
        minlength: 'Invalid min character of name'
      },
      admin_pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      admin_pass2: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        equalTo:"Password not match"
      },
      admin_role:{
        required:'Please select user role'
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