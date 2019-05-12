var pass = document.getElementById("password")
 , pass1 = document.getElementById("password1");

function validatePassword(){
  if(pass.value != pass1.value) {
    pass1.setCustomValidity("Passwords Don't Match");
  } else {
    pass1.setCustomValidity('');
  }
}