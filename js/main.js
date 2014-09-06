$(document).ready(function(){

$(".register_form").hide().fadeIn(500);
$("form").hide().fadeIn(1000);

});



$(".register_form").validate({
  rules: {
    name: "required",
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    name: "Please specify your name",
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
  }
});