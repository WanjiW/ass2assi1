function CheckPassword(inputtxt) 
{ 
var pswrd=   /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
if(inputtxt.value.match(pswrd)) 
{ 
alert('Strong Password!')
return true;
}
else
{ 
alert('Password not strong enough! You need to have: 1 char, 1 num & 1 uppercase and be 8 characters long!')
return false;
}
}

// $(".toggle-password").click(function() {

//     $(this).toggleClass("fa-eye fa-eye-slash");
//     var input = $($(this).attr("toggle"));
//     if (input.attr("type") == "password") {
//       input.attr("type", "text");
//     } else {
//       input.attr("type", "password");
//     }
//   });