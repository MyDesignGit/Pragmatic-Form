$(document).ready(function(){

$(".pragmatic_form").hide().fadeIn(500);
$("form").hide().fadeIn(1000);

$("#cpassword").keyup(function(){

  if($(this).val() == $('#password').val()){
    $('#mismatch').hide();
  } else{

    $('#mismatch').fadeIn(500);

  }

});



});


$.validator.setDefaults({
    submitHandler: function() {
      $( "form" ).addClass( ".shake" );
    }
  });


$('#pragmatic_form').validate({

  

  rules: {
    user_name: "required",

    user_password: {
          required: true,
          minlength: 5
        },

    cpassword: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },    

    email: {
      required: true,
      email: true
    },
  },


  messages: {

    user_name: "Please specify your name",    
      
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    },

    user_password: {
          required: "Please provide a password",
          minlength: "Need at least 5 characters long"
    },
    cpassword: {
          required: "Please provide a password",
          minlength: "Need at least 5 characters long",
          equalTo: "Password Mismatch"
    },
  }
});



